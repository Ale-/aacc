/** Scripts JavaScript/JQuery de aacc.net*/

jQuery (document).ready ( 
  function (){
  
    //Desplegables
    jQuery('.collapsable').click ( 
      function (){
         jQuery(this).next().slideToggle();
      }
    );

    jQuery('#infoButton').click ( 
      function (){
         jQuery('#slidingInfo').slideToggle();
      }
    );

    jQuery('.collapsable .pane-title').click ( 
      function (){
         jQuery(this).next().slideToggle();
      }
    );

    //Cerrados por defecto
    //jQuery('.closed').hide();
    
    // Para remarcar enlace a la home
    var url = window.location.pathname;
    if (window.location.pathname == '/') {
      jQuery('#block-system-main-menu li.first').addClass('active-trail');
    }

    // Infobox del menu de usuario
    var infos = ['Tú escritorio', 'Crear noticia o convocatoria', 'Crear contenido de grupo', 'Cerrar sesión'];
    jQuery('#block-system-user-menu ul li').hover (
      function() {
        //alert('Hasta aquí!');
        var i = jQuery(this).index();
        jQuery('#infoBox').text(infos[i]);
        jQuery('#infoBox').css('opacity', '1');
      },
      function() {
        jQuery('#infoBox').css('opacity', '0');
      }
    );

    //Agrandar los mapas a pantalla completa
    var wh = jQuery(window).height() - jQuery('#admin-menu').height();
    jQuery('.page-mapas .leaflet-container').css('height', wh);

    jQuery('.minmax').click( function(){
        jQuery('.view-fake-mapas .views-field-field-mapa-descripcion').toggle('slow');
        jQuery(this).toggleClass('rotated');
    });

  }
);
