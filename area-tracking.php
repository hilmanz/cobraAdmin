
<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                Area Tracking
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
             </span>
            </header>
            <div class="panel-body">
                <form action="#" class="cmxform form-horizontal" id="newproduct">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <select id="e2" class="category" style="width: 300px">
                                    <option value="">Select Area</option>
                                    <option value="">Jakarta</option>
                                    <option value="">Bandung</option>
                                    <option value="">Medan</option>
                            </select>
                        </div>
                    </div>
                </form>
                <div id="gmap-tabs"></div>
            </div>
        </section>
    </div>
</div>
<!--Google Map-->
<!--Google Map-->
<script src="http://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.7"></script>
<script src="js/google-map/maplace.js"></script>
<script src="js/google-map/data/points.js"></script>



<script>
    new Maplace({
        locations: LocsB,
        map_div: '#gmap-tabs',
        controls_div: '#controls-tabs',
        controls_type: 'list',
        controls_on_map: false,
        show_infowindow: false,
        start: 1,
        afterShow: function(index, location, marker) {
            $('#info').html(location.html);
        }
    }).Load();
</script>