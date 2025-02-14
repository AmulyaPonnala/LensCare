document.addEventListener("DOMContentLoaded", function() {
  const chatIcon = document.querySelector('.chat-icon');
  const chatWindow = document.querySelector('.chat-window');
  const chatClose = document.querySelector('.chat-close');
  const faqQuestions = document.querySelectorAll('.faq-question');

  chatIcon.addEventListener('click', function() {
      chatWindow.style.display = 'block';
  });

  chatClose.addEventListener('click', function() {
      chatWindow.style.display = 'none';
  });

  faqQuestions.forEach(function(question) {
      question.addEventListener('click', function() {
          // Retrieve the answer associated with the clicked question
          const answer = question.nextElementSibling;
          // Toggle the visibility of the answer
          answer.classList.toggle('show');
      });
  });
});
function toggleAnswer(answerId) {
  var answer = document.getElementById('answer' + answerId);
  if (answer.style.display === 'none') {
      answer.style.display = 'block';
  } else {
      answer.style.display = 'none';
  }
}
