let sessionId = Date.now();  // Generate a unique session ID for each user session

document.addEventListener("DOMContentLoaded", function () {
    const chatIcon = document.getElementById("chat-icon");
    const chatWindow = document.getElementById("chat-window");
    const closeChat = document.getElementById("close-chat");
    const sendBtn = document.getElementById("send-btn");
    const chatInput = document.getElementById("chat-input");
    const chatBody = document.getElementById("chat-body");

    // Open chat when clicking chat icon
    chatIcon.addEventListener("click", function () {
        chatWindow.style.display = "block";
    });

    // Close chat when clicking close button
    closeChat.addEventListener("click", function () {
        chatWindow.style.display = "none";
    });

    // Send message when clicking send button
    sendBtn.addEventListener("click", function () {
        sendMessage();
    });

    // Send message on pressing Enter key
    chatInput.addEventListener("keypress", function (event) {
        if (event.key === "Enter") {
            sendMessage();
        }
    });

    // Function to send user message and receive bot response
    function sendMessage() {
        let userInput = chatInput.value.trim();
        if (userInput === "") return; // Don't send empty messages

        // Display user message in chat
        appendMessage("user", userInput);
        chatInput.value = "";  // Clear input field

        // Send message to backend
        fetch("chatbot_api.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({
                message: userInput,
                session_id: sessionId  // Maintain conversation state
            })
        })
        .then(response => response.json())
        .then(data => {
            appendMessage("bot", data.response);
        })
        .catch(error => {
            console.error("Error:", error);
            appendMessage("bot", "⚠️ Error: Unable to process your request.");
        });
    }

    // Function to append messages to chat window
    function appendMessage(role, text) {
        let messageDiv = document.createElement("div");

        messageDiv.classList.add(role === "user" ? "user-message" : "bot-message");
        messageDiv.innerText = text;

        chatBody.appendChild(messageDiv);
        chatBody.scrollTop = chatBody.scrollHeight;  // Auto-scroll to the latest message
    }
});
