<div class="custom-chat-widget" id="customChatWidget">
    <!-- Chat Icon -->
    <div class="chat-icon" id="chatIcon">
        <i class="fas fa-comments"></i>
    </div>
    
    <!-- Chat Window -->
    <div class="chat-window" id="chatWindow">
        <div class="chat-header">
            <h3>PCMI - ChatBot</h3>
            <button class="close-btn" id="closeChat">&times;</button>
        </div>

        <!-- Main content from chatai-template/index.html -->
        <div class="chat-content">
            <!-- Chat List / Container -->
            <div class="chat-list"></div>

            <!-- Typing Area -->
            <div class="typing-area">
                <form action="#" class="typing-form">
                    <div class="input-wrapper">
                        <input type="text" placeholder="Type question..." class="typing-input" required>
                        <button id="send-message-button" class="icon material-symbols-rounded">send</button> 
                    </div>
                    <div class="action-buttons">
                        <span id="theme-toggle-button" class="icon material-symbols-rounded">light_mode</span>
                        <span id="delete-chat-button" class="icon material-symbols-rounded">delete</span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>