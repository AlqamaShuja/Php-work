this.onmessage = function(data){
    if(data['data'] != ''){
        setTimeout(function(){
            this.onmessage('call');
        }, 10000);
    }
}