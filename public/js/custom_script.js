//set select2's default theme
//$.fn.select2.defaults.set( "theme", "bootstrap4" );
//$.fn.select2.defaults.set( "theme", "bootstrap" );
/*select2 plugin for set options' data attribute */
(function($) {
    //$('#element').val('val_id').trigger('change');
    //$('#element').select2('val', 'val_id', true).trigger('change');
    //$(element).select2('data', newObject, true);
    //$("#element").select2("trigger", "select", { data: { id: "val_id" } });
    $.fn.setSelect2OptionDataAttribute = function(newData) {
        //newData = [];
        try{
            var origOptions = this.data("select2").options.options;
            origOptions.data = [];
            var newOptions = $.extend(origOptions, {data: newData});
            this.empty().select2(newOptions);
        }catch(e){
            console.log("error");
        }
        return this;
    };
})(jQuery);


(function($){
    //
    /*
    //window.localStorage - "stores data with no expiration date"
    //window.sessionStorage - "stores data for one session (data is lost when the browser tab is closed)"
    //localStorage.setItem("key", "value");
    //window.localStorage.setItem('key', JSON.stringify({}));
    //localStorage.getItem("key");
    //localStorage.removeItem("key");
    //localStorage.clear();
    */
    /*
    if ( (typeof(Storage) !== void(0)) && (typeof(Storage) !== "undefined") ) {
        // Code for localStorage/sessionStorage.
    } else {
        // Sorry! No Web Storage support..
    }
    */
    
    /**
    * Set an item to a storage() object
    * @param {String} name  The storage() key
    * @param {String} key   The storage() value object key
    * @param {String} value The storage() value object value
    */
    $.fn.setMyStorageData = function (key_1, value, key_2 = null) {
        var myStorageObject = window.sessionStorage;
        if( (key_2 != null) && (key_2 != void(0)) ){
            var existing = myStorageObject.getItem(key_2);
            existing = (existing) ? JSON.parse(existing) : new Object;
            if( (key_1 != null) && (key_1 != void(0)) ){
                existing[key_1] = value;
            }else{
                existing = value;
            }
            myStorageObject.setItem(key_2, JSON.stringify(existing));
        }else{
            myStorageObject.setItem(key_1, JSON.stringify(value));
        }
    };
})(jQuery);

(function($){
    //
    /*
    //window.localStorage - "stores data with no expiration date"
    //window.sessionStorage - "stores data for one session (data is lost when the browser tab is closed)"
    //localStorage.setItem("key", "value");
    //window.localStorage.setItem('key', JSON.stringify({}));
    //localStorage.getItem("key");
    //localStorage.removeItem("key");
    //localStorage.clear();
    */
    /*
    if ( (typeof(Storage) !== void(0)) && (typeof(Storage) !== "undefined") ) {
        // Code for localStorage/sessionStorage.
    } else {
        // Sorry! No Web Storage support..
    }
    */
    
    /**
    * Get an item from a storage() object
    * @param {String} name  The storage() key
    * @param {String} key   The storage() value object key
    */
    $.fn.getMyStorageData = function (key_1, key_2 = null) {
        var myStorageObject = window.sessionStorage;
        var myStorageObjectData = null;
        if( (key_2 != null) && (key_2 != void(0)) ){
            var existing = myStorageObject.getItem(name);
            existing = (existing) ? JSON.parse(existing) : new Object;
            if( (key_1 != null) && (key_1 != void(0)) ){
                myStorageObjectData = existing[key_1];
            }else{
                myStorageObjectData = existing;
            }
        }else{
            myStorageObjectData = JSON.parse(myStorageObject.getItem(key_1));
        }
        return myStorageObjectData;
    };
})(jQuery);

(function($){
    //
    /*
    //window.localStorage - "stores data with no expiration date"
    //window.sessionStorage - "stores data for one session (data is lost when the browser tab is closed)"
    //localStorage.setItem("key", "value");
    //window.localStorage.setItem('key', JSON.stringify({}));
    //localStorage.getItem("key");
    //localStorage.removeItem("key");
    //localStorage.clear();
    */
    /*
    if ( (typeof(Storage) !== void(0)) && (typeof(Storage) !== "undefined") ) {
        // Code for localStorage/sessionStorage.
    } else {
        // Sorry! No Web Storage support..
    }
    */
    
    /**
    * Remove an item from a storage() object
    * @param {String} name  The storage() key
    * @param {String} key   The storage() value object key
    */
    $.fn.removeMyStorageData = function (key_1, key_2 = null) {
        var myStorageObject = window.sessionStorage;
        if( (key_2 != null) && (key_2 != void(0)) ){
            var existing = myStorageObject.getItem(key_2);
            existing = (existing) ? JSON.parse(existing) : new Object;
            if( (key_1 != null) && (key_1 != void(0)) ){
                //console.log( Object.keys(existing) );
                delete existing[key_1];
                var existingFiltered = existing.filter(function(element, index, filterObj, optionalData){
                    return index != key_1;
                });
                key_1 = null;
                $(document).setMyStorageData(key_1, existingFiltered, key_2);
            }else{
                myStorageObject.removeItem(key_2);
            }
        }else{
            myStorageObject.removeItem(key_1);
        }
    };
})(jQuery);