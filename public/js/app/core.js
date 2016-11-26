var Core = {

    init: function() {

        Core.initForms();
        Core.initModals();
        Core.initTables();

        (function($) {

            $.fn.serializeFiles = function() {

                var obj = $(this);

                /* ADD FILE TO PARAM AJAX */
                var formData = new FormData();
                $.each($(obj).find('input[type="file"]'), function(i, tag) {

                    // console.log($(tag)[0].files);
                    $.each($(tag)[0].files, function(i, file) {

                        formData.append(tag.name, file);
                    });
                });

                var params = $(obj).serializeArray();
                $.each(params, function (i, val) {

                    formData.append(val.name, val.value);
                });

                return formData;
            };
        })(jQuery);
    },

        initTables: function()
    {
        $('#datatable-responsive').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            ajax: 'anyData',
            columns: [
                { data: 'name', name: 'name' },
                { data: 'phone', name: 'phone' },
                { data: 'address', name: 'address' },
                { data: 'email', name: 'email' },
                { data: 'comments', name: 'comments' }
            ],
            "initComplete": function () {
                var api = this.api();
            }
        });
    },

  /* App Initialization Functions */

    initForms: function() {
        $('form.ajax').off('submit').on('submit', function(e) {
            e.preventDefault();
            Core.ajaxFormSubmit($(this));
        });

        //Welcome Message
    },

    initModals: function()
    {
        $("#createUser").off('click').on('click', function(e)
        {
            e.preventDefault();
            $('.form-group').removeClass('has-error');
            $('.error').addClass('hide');
            form=$('#formCreateUser');
            Core.ajaxFormSubmit(form);
        });
    },

    ajaxFormSubmit: function(form) {

        var data = form.serializeFiles();
        $.ajax({
            url:            form.attr('action'),
            type:           'post',
            data:           data,
            dataType:       'json',
            mimeType:       "multipart/form-data",
            contentType:    false,
            cache:          false,
            processData:    false,
            success: function(response) {

                if (response.type != 'Error') {
                    if(response.data!=undefined && response.data!='' )
                    {
                        window.location.href=response.data;
                    }
                    document.getElementById(form.attr('id')).reset();
                }
                Core.showMessage(response.message, response.type);
            },
            error: function(response)
            {
                console.log(response.responseText);
                if(response.status==422)
                {
                    if (response.responseText != null){
                        var json = JSON.parse(response.responseText);
                        for(var key in json) {     
                            $( "."+key ).addClass('has-error');
                            document.getElementById('error_'+key).innerHTML=json[key];
                            $( "#error_"+key ).removeClass('hide');
                                    
                        }
                        
                        if(json.email!=undefined && json.email!='The email field is required.')
                        {
                            $( ".email" ).addClass('has-error');
                            document.getElementById('error_email').innerHTML=json.email[0];
                            $( "#error_email" ).removeClass('hide');
                            Core.showMessage(json.email[0], 'error');                          
                        }
                    }
                    Core.showMessage('Please check all the fields are completed correctly', 'error');
                }
            },
        });
    },

    openCloseModal: function()  {
        $('#modal-student').modal('toggle');
    },

    getDeleteRecordFunction: function(id, url, recordType) {

        return function() {

            return Core.deleteRecord(id, url, recordType);
        };
    },

    deleteRecord: function(id, url, recordType) {

        var postData = {};

        if (typeof id != "array")
        url += '/' + id;

        $.ajax({

            url:     url,
            type:    'post',
            success: function(response) {

                Api.processResponse(response);

                if (response.type == "Success") {

                    $('.table tbody').find('#'+response.data.id).animate({ backgroundColor: "#fbc7c7" }, "fast").animate({ opacity: "hide" }, "slow");
                }
            },
        });
    },

    showMessage: function(message, type)
    {
        var messages=document.getElementsByClassName("noty_message");

        var show=true;
        if(messages.length>0)
            if(messages[0].innerText==message)
                show=false;
        if(show)
        {
            typeNoty=type.toLowerCase();
            noty({
                text:       message,
                layout:     'top',
                closeWith:  ['click', 'click'],
                type:       typeNoty,
                timeout:    5000,
                maxVisible: 1,
            });
        }
    },

}