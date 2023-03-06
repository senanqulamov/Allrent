<div class="notification-holder notification-{{ $type }}-holder">
    <div class="notification-header">
        <div class="notification-lamp-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z"
                    stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M12 8V13" stroke="#292D32" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M11.9945 16H12.0035" stroke="#292D32" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
            <p>Alert - ({{ $type }})</p>
        </div>
        <div class="notification-close-icon" onclick="closeNotification(this)">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z"
                    stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M9.17 14.83L14.83 9.17" stroke="#292D32" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M14.83 14.83L9.17 9.17" stroke="#292D32" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </div>
    </div>
    <div class="notification-body">
        <p>{{ $content }}</p>
    </div>
</div>

<script>
    var notification = document.querySelector('.notification-holder');
    setTimeout(() => {
        notification.classList.add('active-notification');
    }, 500);

    function closeNotification(button) {
        console.log(button);
        button.parentNode.parentNode.classList.remove('active-notification');
    }
</script>
