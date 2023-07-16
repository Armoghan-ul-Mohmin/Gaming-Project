<script>
    $(document).ready(function () {
        // Load chat messages
        loadChatMessages();

        // Send message on button click
        $('#sendMessageBtn').click(function () {
            sendMessage();
        });

        // Send message on Enter key press
        $('#messageInput').keypress(function (event) {
            if (event.which === 13) {
                sendMessage();
            }
        });
    });

    function loadChatMessages() {
        // Make an AJAX request to get chat messages from the server
        $.ajax({
            url: 'get_messages.php',
            type: 'GET',
            success: function (response) {
                // Display the chat messages in the chatMessages div
                $('#chatMessages').html(response);
            }
        });
    }

    function sendMessage() {
        var message = $('#messageInput').val().trim();

        if (message !== '') {
            // Make an AJAX request to save the message to the server
            $.ajax({
                url: 'save_message.php',
                type: 'POST',
                data: { message: message },
                success: function (response) {
                    // Clear the message input
                    $('#messageInput').val('');

                    // Reload chat messages to display the updated messages
                    loadChatMessages();
                }
            });
        }
    }

</script>