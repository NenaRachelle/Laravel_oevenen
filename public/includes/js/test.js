function proberen(){
    var Dier = Backbone.Model.extend({
        initialize:function(){
            console.log('Er is een nieuw dier gemaakt');
        }
        
    });
    console.log("in proberen");
    var kip = new Dier();
    console.log(kip);
    var go = {};
    console.log(go);
}