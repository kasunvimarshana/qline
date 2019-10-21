<script>
$(function(){
    "use strict";
    
    var eventSourceObject = null;
    var optionData = new Object();//{};
    optionData.url = "{!! route('qualityRecordInputDefectData.selectQualityRecordInputDefectData', []) !!}";
    
    @php
    $setup_configuration_line_id = null;
    if( (session()->has('setup_configuration_line_id')) && (session()->exists('setup_configuration_line_id')) ){
        $setup_configuration_line_id = session()->get('setup_configuration_line_id', null);
    }else{
        $setup_configuration_line_id = null;
    }
    @endphp
    
    optionData.url = "{!! route('qualityRecordInputDefectData.selectQualityRecordInputDefectData', ['line_id' => $setup_configuration_line_id]) !!}";
    
    optionData.id = "#form1";
    
    var form1 = $("#form1");
    var parent_card = form1.closest(".card");
    var is_dirty = false;
    
    parent_card.removeClass("bg-warning text-white");
    parent_card.addClass("bg-light");
    
    var submit_form1 = form1.find("#submit_form1");
    submit_form1.attr("disabled", true);
    
    form1.data("is_dirty", is_dirty);
    
    if( (!!window.EventSource) ){
        //console.log( window.EventSource );
        eventSourceObject = new EventSource( optionData.url );
        
        eventSourceObject.addEventListener("open", function(event){
            //console.log(event.data);
        }, false);
        
        eventSourceObject.addEventListener("error", function(event){
            //console.log(event.data);
            if( (event.readyState == EventSource.CLOSED) ){
               //console.log( EventSource.CLOSED );
            }
        }, false);
        
        eventSourceObject.addEventListener("message", function(event){
            //console.log(event.data);
            try{
                is_dirty = form1.data("is_dirty");
                var quality_recored_input_defect_data_object = null;
                var data = event.data;
                var data_object = new Object();
                
                var data_object = JSON.parse(data, function (key, value) {
                    //return value;
                    //console.log(key);
                    //console.log(value);
                    return value;
                });
                
                if( (is_dirty == false) ){
                    if( (data_object.hasOwnProperty("quality_recored_input_defect_data_object")) && (data_object.quality_recored_input_defect_data_object != null) ){
                        quality_recored_input_defect_data_object = data_object.quality_recored_input_defect_data_object;
                        parent_card.removeClass("bg-light");
                        parent_card.addClass("bg-warning text-white");
                        is_dirty = true;
                        form1.data("is_dirty", is_dirty);
                        submit_form1.attr("disabled", false);
                        
                        bootbox.confirm({
                            size: "small",
                            title: "Confirmation",
                            message: "Card No: <strong>" + quality_recored_input_defect_data_object.code + "</strong><br/><small> was picked</small>",
                            onEscape: true,
                            show: true,
                            scrollable: true,
                            buttons: {
                                confirm: {
                                    label: 'Ok',
                                    className: 'btn-danger btn-primary',
                                    callback: function(){ /*console.log("callback");*/ }
                                },
                                cancel: {
                                    label: 'Cancel',
                                    className: 'btn-danger btn-primary d-none',
                                    callback: function(){ /*console.log("callback");*/ }
                                }
                            },
                            callback: function (result) {
                                //console.log('This was logged in the callback: ' + result);
                                if( result === true ){

                                }else{}
                            }
                        })
                        .find('.modal-header').addClass('bg-danger')
                        /*.find('.bootbox-cancel:first').focus()
                        .find('.bootbox-cancel').attr('autofocus', true)
                        .on('shown.bs.modal', function(e){
                        $(this).find(".bootbox-cancel:first").focus();
                        })*/
                        .init(function(e){
                            //$(this).find(".bootbox-cancel").focus();
                        });
                        
                        var form1_hidden_input_group = form1.find("#form1_hidden_input_group");
                        var measure_point_id = form1.find("#measure_point_id");
                        var temp_quality_record_input_defect_data_id = "quality_record_input_defect_data_id";
                        
                        form1_hidden_input_group.find( ("#" + temp_quality_record_input_defect_data_id) ).remove();
                        
                        var input_temp = $("<input/>");
                        input_temp.attr("id", (temp_quality_record_input_defect_data_id));
                        input_temp.attr("name", (temp_quality_record_input_defect_data_id));
                        input_temp.attr("value", (quality_recored_input_defect_data_object.id));
                        input_temp.attr("required", ("required"));
                        input_temp.attr("readonly", ("readonly"));
                        input_temp.addClass( temp_quality_record_input_defect_data_id );
                        form1_hidden_input_group.append(input_temp);
                    }
                }
            }catch(exception){
                //console.log(exception);
            }
        }, false);
    }else{
        //route to xhr polling
    }
    
});
</script>