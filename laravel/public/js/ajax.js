$(document).on('click', '#btn_logout', (event) => {
    event.preventDefault();

    $.ajax({
        type: 'POST',
        url: '/logout',
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        timeout: 30000,
        success: (data) => {
            window.location.href = "/";
        },
        error: () => {
        }
    });
});