jQuery(document).ready(function($) {

    function loadLogs() {
        $('#myplugin-dashboard').html('<p>Loading logs...</p>');

        $.get('/wp-json/myplugin/v1/logs')
            .done(function(response) {
                if (response.logs) {
                    $('#myplugin-dashboard').html(
                        '<button id="refresh-logs">Refresh Logs</button>' +
                        '<pre>' + response.logs + '</pre>'
                    );
                } else {
                    $('#myplugin-dashboard').html('<p>No logs found.</p>');
                }
            })
            .fail(function() {
                $('#myplugin-dashboard').html('<p style="color:red;">Failed to load logs. Please try again later.</p>');
            });
    }

    loadLogs();

    // Reload logs on button click
    $(document).on('click', '#refresh-logs', function() {
        loadLogs();
    });
});
