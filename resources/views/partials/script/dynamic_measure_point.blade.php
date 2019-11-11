<script>
$(function(){
    "use strict";
    
    var optionData = new Object();//{};
    optionData.url = "{!! route('measurePoint.selectAllMeasurePoints', []) !!}";
    optionData.id = "#id";
    optionData.id_prefix = "measure_point_element_id";
    
    var form_hidden_input_group_1 = $("#form1_hidden_input_group");
    var form_hidden_input_group_2 = $("#form1_hidden_input_group_child_3_1_1_1");
    var form_hidden_input_group_3 = $("#form1_hidden_input_group_child_3_1_2_1");
    
    var activity_index_array = new Array("1", "2", "3");
    
    /*
    if( ($( optionData.id ).length) ){
        alert("The element you're testing is present.");
    }
    */
    
    var form_hidden_input_group_1_element = new Array();
    var form_hidden_input_group_2_element = new Array();
    var form_hidden_input_group_3_element = new Array();
    var element_value_temp = [];
    
    /*
    $(document).ready(function(){
        $("button").click(function(){
            $.ajaxSetup({
                url: "demo_ajax_load.txt", success: function(result){
                    $("div").html(result);
                }
            });
            $.ajax();
        });
    });
    */
    
    /*
    $(document).ready(function(){
        $("button").click(function(){
            $.getScript("demo_ajax_script.js");
        });
    });
    */
    
    /*
    $(document).ready(function(){
        personObj = new Object();
        personObj.firstname = "First Name";
        personObj.lastname = "Last Name";
        personObj.age = 50;
        personObj.eyecolor = "blue"; 
        $("button").click(function(){
            $("div").text($.param(personObj));
        });
    });
    */
    
    /*
    $(document).ready(function(){
        $(document).ajaxStart(function(){
            $("#wait").css("display", "block");
        });
        $(document).ajaxComplete(function(){
            $("#wait").css("display", "none");
        });
        $("button").click(function(){
            $("#txt").load("demo_ajax_load.asp");
        });
    });
    */
    
    /*
    $(document).ready(function(){
        $(document).ajaxSend(function(e, xhr, opt){
            $("div").append("<p>Requesting " + opt.url + "</p>");
        });
        $("button").click(function(){
            $("div").load("demo_ajax_load.asp");
        });
    });
    */
    
    /*
    $(document).ready(function(){
        $("button").click(function(){
            var x = $("form").serializeArray();
            $.each(x, function(i, field){
                $("#results").append(field.name + ":" + field.value + " ");
            });
        });
    });
    */
    
    /*
    var ajaxReq = $.ajax('GetJsonData', {
        dataType: 'json', 
        timeout: 500
    });

    ajaxReq.success(function (data, status, jqXhr) {
        $('p').append(data.firstName + ' ' + data.middleName + ' ' + data.lastName);
    })
                
    ajaxReq.error(function (jqXhr, textStatus, errorMessage) {
        $('p').append('Error: ' + errorMessage);
    })
    */
    
    function createInputElement(data){
        //console.log( data );
        var id_prefix = optionData.id_prefix;
        var id_prefix_input = id_prefix + "_input_";
        var temp_form_hidden_input_group_1 = form_hidden_input_group_1;
        var temp_form_hidden_input_group_2 = form_hidden_input_group_2;
        var temp_form_hidden_input_group_3 = form_hidden_input_group_3;
        var temp_activity_index_array = activity_index_array;
        
        deleteInputScanDataElement( data );
        
        var input_temp = $("<input/>");
        input_temp.attr("id", (id_prefix_input + data.id));
        input_temp.attr("name", (id_prefix + "[]"));
        input_temp.attr("value", (data.id));
        input_temp.attr("required", ("required"));
        input_temp.attr("readonly", ("readonly"));
        input_temp.data("id", data.id);
        input_temp.addClass( id_prefix );
        //temp_form_hidden_input_group_1.append(input_temp);

        if( ((temp_activity_index_array[0].localeCompare(data.activity_index)) == 0) ){
            //
        }else if( ((temp_activity_index_array[1].localeCompare(data.activity_index)) == 0) ){
                 
        }else if( ((temp_activity_index_array[2].localeCompare(data.activity_index)) == 0) ){
            
        }
    }
    
    function deleteInputElement(data){
        //console.log( data );
        var id_prefix = optionData.id_prefix;
        var id_prefix_input = id_prefix + "_input_";
        var temp_form_hidden_input_group_1 = form_hidden_input_group_1;
        var temp_form_hidden_input_group_2 = form_hidden_input_group_2;
        var temp_form_hidden_input_group_3 = form_hidden_input_group_3;
        var temp_activity_index_array = activity_index_array;
        
        if( ((temp_activity_index_array[0].localeCompare(data.activity_index)) == 0) ){
            temp_form_hidden_input_group_1.find( ("#" + id_prefix_input + data.id) ).remove();
        }else if( ((temp_activity_index_array[1].localeCompare(data.activity_index)) == 0) ){
            temp_form_hidden_input_group_2.find( ("#" + id_prefix + data.id) ).remove();
        }else if( ((temp_activity_index_array[2].localeCompare(data.activity_index)) == 0) ){
            temp_form_hidden_input_group_3.find( ("#" + id_prefix + data.id) ).remove();
        }
        //temp_form_hidden_input_group_1.find( ("#" + id_prefix_input + data.id) ).remove();
    }
    
    var request = $.ajax({
        url: optionData.url,
        cache: false,
        quietMillis: 10,
        //dataType: 'json',
        delay: 10,
        method: "GET",
        //crossDomain: true,
        //timeout: 0,
        //context: document.body,
        //encode: true,
        //processData: false,
        //contentType: false,
        data : {
            //'key': 'value',
        },
        beforeSend: function( xhr ) {
            //xhr.overrideMimeType( "text/plain; charset=x-user-defined" );
        },
        statusCode: {
            404: function() {
                //console.log( "page not found" );
            }
        }
    }); 
        request.done(function(data) {
            //console.log("done");
            //console.log(data);
            var id_prefix = optionData.id_prefix;
            var data_data = data.data;
            
            if( (data_data == void(0)) || (data_data.length <= 0) ){
                //console.log("data_data.length");
            }else{
                $.each(data_data, function(index, value){
                    //console.log(index);
                    //console.log(value);
                    var div_1 = $("<div></div>");
                    var div_2 = $("<div></div>");
                    var div_3 = $("<div></div>");
                    var button_1 = $("<button></button>");
                    var span_1 = $("<span></span>");
                    var colour_code = null;
                    
                    div_1.addClass("d-inline-flex align-self-start col col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 p-0");
                    div_2.addClass("col p-0");
                    div_3.addClass("btn-group btn-group-lg w-100 p-1");
                    //button_1.addClass("btn btn-lg");
                    button_1.addClass("btn btn-primary btn-lg");
                    span_1.addClass("text-wrap text-break");
                    
                    button_1.removeClass(id_prefix);
                    button_1.addClass(id_prefix);
                    
                    span_1.text(value.code);
                    if( (value.colour) ){
                        var colour = value.colour;
                        colour_code = colour.code;
                    }
                    button_1.css({"background-color": colour_code});
                    
                    button_1.off("click").on("click", function(event){
                        event.preventDefault();
                        //event.stopPropagation();
                    });
                    
                    button_1.append(span_1);
                    div_3.append(button_1);
                    div_2.append(div_3);
                    div_1.append(div_2);
                    form_hidden_input_group_2.append(div_1);
                    
                    ////////////////////////////////////////////////////////////////////////////////////////////
                    /*var input_quality_record_input_scan_data = form1_hidden_input_group.find( ("." + id_quality_record_input_scan_data_prefix) );
            if( (input_quality_record_input_scan_data.length <= 0) ){
                count_data.text( count_data_sum );
                quantity_inspect.val( count_data_sum );
            }else{
                input_quality_record_input_scan_data.each(function( index, value ){
                    var count_data_temp = $(value).data("count_data");
                    count_data_temp = parseFloat(count_data_temp);
                    count_data_sum = (count_data_sum + count_data_temp);
                    count_data.text( count_data_sum );
                    quantity_inspect.val( count_data_sum );
                });
            }
                    
                    if( (count_defect_value > standardDataSewingAuditObject.count_accept) ){
                submit_pass.addClass("d-none");
            }else{
                submit_pass.removeClass("d-none");
            }*/
                    ////////////////////////////////////////////////////////////////////////////////////////////
                    ////////////////////////////////////////////////////////////////////////////////////////////
                    /*
                    function createInputScanDataElement( data ){
            //console.log( data );
            var id_quality_record_input_scan_data_prefix = "quality_record_input_scan_data_id_array";
            var form1_hidden_input_group = $("#form1_hidden_input_group");
            deleteInputScanDataElement( data );
            
            var input_temp = $("<input/>");
            input_temp.attr("id", (id_quality_record_input_scan_data_prefix + data.quality_record_input_scan_data_id));
            input_temp.attr("name", (id_quality_record_input_scan_data_prefix + "[]"));
            input_temp.attr("value", (data.quality_record_input_scan_data_id));
            input_temp.attr("required", ("required"));
            input_temp.attr("readonly", ("readonly"));
            input_temp.data("count_data", data.count_data);
            input_temp.addClass( id_quality_record_input_scan_data_prefix );
            form1_hidden_input_group.append(input_temp);
            setQualityRecordInputScanDataValues( data );
        }
function deleteInputScanDataElement( data ){
            //console.log( data );
            var id_quality_record_input_scan_data_prefix = "quality_record_input_scan_data_id_array";
            var form1_hidden_input_group = $("#form1_hidden_input_group");
            form1_hidden_input_group.find( ("#" + id_quality_record_input_scan_data_prefix + data.quality_record_input_scan_data_id) ).remove();
            setQualityRecordInputScanDataValues( data );
        }
        */
                    ////////////////////////////////////////////////////////////////////////////////////////////
                });
            }
        });
        request.fail(function() {
            //console.log("fail");
        });
        request.always(function() {
            //console.log("always");
        });
    });
</script>