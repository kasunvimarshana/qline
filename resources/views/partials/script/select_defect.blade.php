<script>
$(function(){
    "use strict";
    //$.fn.select2.defaults.set( "theme", "bootstrap" );
    /*$('#id').select2({
        theme: "bootstrap"
    });*/
    var optionData = new Object();//{};
    optionData.url = "{!! route('defect.selectAllDefects', []) !!}";
    optionData.id = "#defect_id";
    
    /*
    if( ($( optionData.id ).length) ){
        alert("The element you're testing is present.");
    }
    */
    
    function getFormatResult(param){
        if (!param.id){
            return param.text; // optgroup
        }
        var colour_code = null;
        if( (param.data) ){
            var data = param.data;
            if( (data.defect_category) ){
                var defect_category = data.defect_category;
                if( (defect_category.colour) ){
                    var colour = defect_category.colour;
                    colour_code = colour.code;
                }
            }else if( (data.colour) ){
                var colour = data.colour;
                colour_code = colour.code;
            }
        }

        var tempOptionObject = "<div class='text-wrap text-break w-100 h-100 m-1' style='background-color:"+colour_code+"'>"
            + "<p class='text-center'>" + param.text + "</p>"
            + "</div>";

        var optionObject = $(tempOptionObject);
        return optionObject;
    }
    
    var selectOptionObject = $( optionData.id ).select2({
        theme : 'bootstrap',
        //disabled : false,
        scrollAfterSelect : false,
        closeOnSelect : true,
        //containerCssClass : ':all:',
        //dropdownCssClass : 'class',
        width : 'resolve',
        //allowClear : true,
        formatResult : function(param){
            return getFormatResult(param);
        },
        formatSelection : function(param){
            return getFormatResult(param);
        },
        templateResult : function(data) {
            return getFormatResult(data);
        },
        templateSelection : function(data) {
            return getFormatResult(data);
        },
        placeholder	: {
            //id : '-1',
            placeholder : 'Option'
        },
        //tags : [],
        //tokenSeparators : [],
        //maximumInputLength: 0,
        //maximumSelectionLength: 0,
        //minimumInputLength : 2,
        //minimumResultsForSearch: -1,
        minimumResultsForSearch: Infinity,
        //dropdownAutoWidth: false,
        //dropdownCss: false,
        multiple : false,
        escapeMarkup : function (markup) { return markup; },
        data : [],
        //data : function(){ return {results: selections} },
        ajax : {
            url : optionData.url,
            cache : false,
            quietMillis: 10,
            // dataType: 'json',
            delay : 10,
            data : function (params) {
                var query = {
                    search : params.term, // $.trim(params.term)
                    active : true,
                    page : params.page || 1,
                    length : 10
                }
                
                var elementObject = $( optionData.id );
                var elementObjectData = new Object();
                var elementObjectDataTemp = new Object();
                elementObjectDataTemp = elementObject.data();
                //elementObject.removeData();
                
                if( elementObjectDataTemp.hasOwnProperty('defect_category_id') ){
                    query.defect_category_id = elementObjectDataTemp.defect_category_id;
                }
                
                return query;
            },
            //results : function(data, params){},
            processResults : function (data, params) {
                //params.page = params.page || 1;
                return {
                    results : $.map(data.data, function (obj) {
                        return { 
                            id : obj.id, 
                            text : ( obj.name || obj.code ), 
                            data: obj 
                        };
                    }),
                    pagination : {
                        //more: (params.page * data.length) < Number(data.recordsTotal)
                        more : data.pagination.more
                    }
                };
            }
        },
        initSelection: function(element, callback) {
            // the input tag has a value attribute preloaded that points to a preselected repository's id
            // this function resolves that id attribute to an object that select2 can render
            // using its formatResult renderer - that way the repository name is shown preselected
            /*
            var data = [];
            $(element.val()).each(function () {
                data.push({id: this, text: this});
            });
            */
            var element_value = $(element).val();
            if( (typeof element_value === "undefined") || (element_value === void(0)) || (element_value == "") || (element_value == null) ){
                //console.log(element_value);
            }else{
                $.ajax({
                    type : 'GET', // define the type of HTTP verb we want to use (POST for our form)
                    url : optionData.url, // the url where we want to POST
                    data : {
                        'id' : element_value
                    }, // our data object
                    quietMillis: 10,
                    delay : 10,
                    //dataType : 'json', // what type of data do we expect back from the server
                    //encode : true,
                    //processData : false,
                    //contentType : false,
                    cache : false
                })
                // using the done promise callback
                .done(function(data) {
                    //console.log(data);
                    var data = $.map(data.data, function (obj) {
                        return {
                            id : obj.id, 
                            text : ( obj.name || obj.code ), 
                            data: obj
                        };
                    });
                    callback(data);
                })
                .fail(function() {
                    //console.log("error");
                })
                .always(function() {
                    //console.log("complete" );
                });
            }
        },
        //sortResults: function(results, container, query) {},
        /*query: function (query) {
            var data = {results: []}, i, j, s;
            for (i = 1; i < 5; i++) {
                s = "";
                for (j = 0; j < i; j++) {s = s + query.term;}
                data.results.push({id: query.term + i, text: s});
            }
            query.callback(data);
        }*/
    });//.select2('val', []);
    
    selectOptionObject.on('select2:opening select2:closing', function( event ) {
        var searchfield = $(this).parent().find('.select2-search__field');
        searchfield.prop('disabled', true);
    });
});
</script>