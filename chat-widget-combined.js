import * as chatbot from './chatai-template/script.js';

document.addEventListener('DOMContentLoaded', function() {
    // Widget controls
    const chatIcon = document.getElementById('chatIcon');
    const chatWindow = document.getElementById('chatWindow');
    const closeChat = document.getElementById('closeChat');

    // Toggle chat window
    chatIcon.addEventListener('click', function() {
        chatWindow.style.display = chatWindow.style.display === 'none' ? 'flex' : 'none';
        if (chatWindow.style.display === 'flex') {
            // Initialize chatbot if window is opened
            chatbot.loadDataFromLocalstorage();
        }
    });

    // Close chat window
    closeChat.addEventListener('click', function() {
        chatWindow.style.display = 'none';
    });

    // Initialize your existing chatbot functionality
    chatbot.loadTrainingData();
});