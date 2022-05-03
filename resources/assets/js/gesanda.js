
// JavaScript for label effects only
$(window).load(function(){
    $(".input-effect input").focusout(function(){
        if($(this).val() !== ""){
            $(this).addClass("has-content");
        }else{
            $(this).removeClass("has-content");
        }
    });
});


let loaderElement = document.getElementById('livewire-loading-spinner');
let loaderTimeout = null;

Livewire.hook('message.sent', () => {
    if (loaderTimeout == null) {
        loaderTimeout = setTimeout(() => {
            loaderElement.classList.add('show');
        }, parseInt(loaderElement.dataset.showDelay));
    }
});

Livewire.hook('message.received', () => {
    if (loaderTimeout != null) {
        loaderElement.classList.remove('show');
        clearTimeout(loaderTimeout);
        loaderTimeout = null;
    }
});
