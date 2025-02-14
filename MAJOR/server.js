const express = require('express');
const fs = require('fs');
const app = express();
const port = 3000;

// Middleware to parse form data
app.use(express.urlencoded({ extended: true }));

// Route to handle form submission
app.post('/submit-form', (req, res) => {
  const { name, email, phone, selectedEyewearModel } = req.body;
  const formData = `Name: ${name}\nEmail: ${email}\nPhone: ${phone}\nSelected Eyewear Model: ${selectedEyewearModel}\n\n`;

  // Append form data to text file
  fs.appendFile('form_data.txt', formData, (err) => {
    if (err) {
      console.error(err);
      res.status(500).send('Error saving form data');
    } else {
      console.log('Form data saved successfully');
    //   res.send('Form data saved successfully');
    }
  });
});

app.listen(port, () => {
  console.log(`Server is running on http://localhost:${port}`);
});