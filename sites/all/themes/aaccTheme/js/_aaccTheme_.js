/** Scripts JavaScript/JQuery de Ehcofab.net*/

jQuery (document).ready ( 
  function (){
  
   //Colores en los menús
   var mainItems = new Array('#0f0', '#0fc', '#0f6', '#0fc', '#6f0', '#9f0', '#ff5f53'); 
   var anonItems = new Array('#0f0', '#0f6', '#0fc', '#6f0', '#9f0', '#ff5f53'); 
   var mainMenuItems = jQuery('#block-system-main-menu ul.menu > li a'); 
   var anonMenuItems = jQuery('#block-menu-menu-anon-main-menu ul.menu > li a');
   for (var i = 0; i < mainItems.length; i++) {
     jQuery (mainMenuItems[i]).css('color', mainItems[i]);
   }
   for (var i = 0; i < anonItems.length; i++) {
     jQuery (anonMenuItems[i]).css('color', anonItems[i]);
   }

  //Desplegables
  jQuery('.collapsable .pane-title').click ( 
    function (){
       jQuery(this).next().slideToggle();
    }
  );

  //Cerrados por defecto
  jQuery('.closed').next().hide();


  }
);
