require([
	'jquery',
	'Magento_Ui/js/modal/modal'
    ], function ($, modal) {
	'use strict';
    
	// Function to initialize and show a confirmation modal
	function showConfirmationModal(message, callback) {
	    var options = {
		type: 'popup',
		modalClass: 'confirm-modal',
		responsive: true,
		buttons: [{
		    text: $.mage.__('Yes'),
		    class: 'action-primary',
		    click: function () {
			callback(true);
			this.closeModal();
		    }
		}, {
		    text: $.mage.__('No'),
		    class: 'action-secondary',
		    click: function () {
			callback(false);
			this.closeModal();
		    }
		}]
	    };
    
	    var popup = modal(options, $('#confirm-modal-container'));
	    $('#confirm-modal-content').text(message);
	    $('#confirm-modal').modal('openModal');
	}
    
	// Example usage: Show a confirmation modal when deleting a quote
	$('.quote-delete-link').on('click', function (event) {
	    event.preventDefault();
	    var quoteId = $(this).data('quote-id');
	    var message = 'Are you sure you want to delete quote ' + quoteId + '?';
    
	    showConfirmationModal(message, function (confirmed) {
		if (confirmed) {
		    // Perform delete operation
		    console.log('Deleting quote with ID ' + quoteId);
		} else {
		    // Do nothing
		    console.log('Canceling deletion');
		}
	    });
	});
    
	// Add your custom JavaScript code here
    
    });
    