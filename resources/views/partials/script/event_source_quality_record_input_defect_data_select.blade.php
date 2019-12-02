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
    
    submit_form1.removeClass("btn-primary");
    submit_form1.addClass("btn-secondary");
    
    form1.data("is_dirty", is_dirty);
    
    function doProcessData01(parameter_event_source_object, parameter_event, parameter_data){
/* ----- */
//console.log(parameter_event_source_object);
//console.log(parameter_event);
//console.log(parameter_data);
if( (parameter_data == void(0)) ){
    /*
    console.log("error");
    return false;
    */
}
                        /* *** */
is_dirty = form1.data("is_dirty");
var quality_recored_input_defect_data_object = null;
var data = parameter_event.data;
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

        submit_form1.removeClass("btn-secondary");
        submit_form1.addClass("btn-primary");

        bootbox.confirm({
            size: "small",
            title: "Defect Card Tracer",
            message: "Picked Card No: <strong> ( " + quality_recored_input_defect_data_object.code + " ) </strong>",
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

        setTimeout(function() {
            parameter_event_source_object.close();
        }, 0);
    }
}

/*
if (parameter_event.id == "CLOSE") {
    setTimeout(function() {
        parameter_event.target.close();
        if (typeof(parameter_event_source_object) !== "undefined") {
            parameter_event_source_object.close();
        }
    }, 0);
}
*/
                        /* *** */
/* ----- */
    }
    
    function isFunction(functionToCheck) {
        return functionToCheck && {}.toString.call(functionToCheck) === '[object Function]';
    }
    
    function debounce(func, wait) {
        var timeout;
        var waitFunc;
        
        return function() {
            if(isFunction(wait)){
                waitFunc = wait;
            }else{
                waitFunc = function() { return wait };
            }

            var context = this, args = arguments;
            var later = function() {
                timeout = null;
                func.apply(context, args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, waitFunc());
        };
    }
    
    var reconnectFunc = debounce(function() {
        setupEventSource();
        // Double every attempt to avoid overwhelming server
        reconnectFrequencySeconds *= 2;
        // Max out at ~1 minute as a compromise between user experience and server load
        if (reconnectFrequencySeconds >= 64) {
            reconnectFrequencySeconds = 64;
        }
    }, function(){ return reconnectFrequencySeconds * 1000 });
    
    function setupEventSource(){
        if( (!!window.EventSource) && (typeof(EventSource) !== "undefined") ){
            //console.log( window.EventSource );
            /*
            eventSourceObject = new EventSource( optionData.url );
            */
            eventSourceObject = new EventSource( optionData.url, {
                withCredentials: true
            });
            //eventSourceObject.addEventListener('connections', function(event){}, false);
            //eventSourceObject.addEventListener('requests', function(event){}, false);
            //eventSourceObject.addEventListener('uptime', function(event){}, false);
            eventSourceObject.addEventListener("open", function(event){
                //console.log("open");
                //console.log(event.data);
            }, false);
            eventSourceObject.addEventListener("error", function(event){
                //console.log("error");
                //console.log(event.data);
                /*
                if( (event.readyState == EventSource.CLOSED) ){
                   console.log( EventSource.CLOSED );
                }
                */
                switch ( (event.target.readyState) ) {
                    case EventSource.CONNECTING:
                        //console.log("connecting");
                        break;
                    case EventSource.OPEN:
                        //console.log("open");
                        break;
                    case EventSource.CLOSED:
                        //console.log("close");
                        break;
                    default:
                        //console.log("default");
                        eventSourceObject.close();
                        reconnectFunc();
                        break;
                }
            }, false);
            eventSourceObject.addEventListener("message", function(event){
                //console.log("message");
                //console.log(event.data);
                /*
                if (event.origin != 'http://example.com') {
                    alert('Origin was not http://example.com');
                    return;
                }
                */
                try{
                    //
                    var data = null;
                    //data = event.data;
                    /*
                    var data_object = new Object();//{}
                    var data_object = JSON.parse(data, function (key, value) {
                        //console.log(key);
                        //console.log(value);
                        //return value;
                        return value;
                    });
                    */
                    //var data = JSON.parse(data);
                    //console.log( data );
                    if( ((is_dirty == void(0)) || (is_dirty == false)) ){
                        //console.log(is_dirty);
                        /* *** */
                        doProcessData01(eventSourceObject, event, data);
                        /* *** */
                    }
                }catch(exception){
                    console.log(exception);
                }
            }, false);
        }else{
            console.log("EventSource needed for this page");
        }
    }
    
    try{
        setupEventSource();
    }catch(exception){
        //console.log(exception);
    }
    
});
</script>