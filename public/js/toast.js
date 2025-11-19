// Select save button and toast element
var $saveBtn = $('#saveBtn');
var $toastLiveExample = $('#liveToast');

if ($saveBtn.length) {
    // Get or create Bootstrap toast instance
    var toastBootstrap = bootstrap.Toast.getOrCreateInstance($toastLiveExample[0]);

    // Show toast when save button is clicked
    $saveBtn.on('click', function() {
        toastBootstrap.show();
    });
}