<?php

// Add Little Security
if ( ! defined( 'ABSPATH' ) ) {
	die();
}

add_action('wp_head', 'fs_compare_script');
function fs_compare_script(){
	if (! defined('PLUGIN_DIR') ){
	define('PLUGIN_DIR' , dirname(__FILE__).'/');
}
else{}

?>
<!-- DataTables via CDN implementation -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/b-1.5.6/r-2.2.2/rg-1.1.0/rr-1.2.4/sc-2.0.0/sl-1.3.0/datatables.min.css"/> 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/b-1.5.6/r-2.2.2/rg-1.1.0/rr-1.2.4/sc-2.0.0/sl-1.3.0/datatables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.0.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
jQuery.noConflict();
jQuery(document).ready(function ( $ ) {
// your script goes here to execute once the document loads

$(document).ready(function() {
	var table = $('.tablepress').DataTable( {
		
	"searching": true,
		
			dom: 'trp',
			columnDefs: [ {
					orderable: false,
					className: 'select-checkbox',
					targets:   0
			} ],
			select: {
					style:    'multi',
					selector: 'td:first-child'
			},
			order: [[ 1, 'asc' ]]
	} );


	$("#btn-show-selected").on('click', function(){
			$.fn.dataTable.ext.search.push(
					function (settings, data, dataIndex){
							return ($(table.row(dataIndex).node()).hasClass('selected')) ? true : false;
					}
			);

			table.draw();

			$.fn.dataTable.ext.search.pop();
	});

	$("#btn-show-all").on('click', function(){
			table.draw();
	});
} );
});
</script>

<script>
jQuery.noConflict();
jQuery(document).ready(function ( $ ) {
 //================================================================
	//Compare Function
	//================================================================
	$(".topCompareBtn").click(function(){

					var btn = $(this);
					var table = btn.closest("table.compareTable").find("table.compareTable");

					if(btn.attr("value")=='COMPARE'){
							btn.attr("value","RESET");
							table.find(":input.compareCk").each(function(){
											var cb = $(this);
											if(!cb.prop('checked')){
												 cb.parent().parent().addClass("comparedHidden");
												 cb.parent().parent().hide();
											}
							});

							setDTRowBg(table);

			}else{
					btn.attr("value","COMPARE");
					table.find('tbody').find('tr').each(function(){
							var row = $(this);
							if(row.hasClass("comparedHidden")){
									row.removeClass("comparedHidden");
									if(!row.hasClass("isHidden")){
											row.show();
									}
							}
					});

					setDTRowBg(table);
			}
	});

});
//close jQuery
</script>
<script>
jQuery.noConflict();
jQuery(document).ready(function ( $ ) {
	columnTh = $("table th:contains('Insertions')");
	columnIndex = columnTh.index() +9;
	$('table tr td:nth-child(' + columnIndex + ')').css("whitespace", "nowrap"); 
	 columnTh.css("whitespace", "nowrap");
});
	
//Expanding td content

//Column 2
		jQuery(document).ready(function ($) {
    $('.column-2').on('click', function(){
    	$(this).children('.hidden').toggle();
    });
});
//Column 3
		jQuery(document).ready(function ($) {
    $('.column-3').on('click', function(){
    	$(this).children('.hidden').toggle();
    });
});
//Column 4
		jQuery(document).ready(function ($) {
    $('.column-4').on('click', function(){
    	$(this).children('.hidden').toggle();
    });
});
//Column 5
		jQuery(document).ready(function ($) {
    $('.column-5').on('click', function(){
    	$(this).children('.hidden').toggle();
    });
});
//Column 6
		jQuery(document).ready(function ($) {
    $('.column-6').on('click', function(){
    	$(this).children('.hidden').toggle();
    });
});
//Column 7
		jQuery(document).ready(function ($) {
    $('.column-7').on('click', function(){
    	$(this).children('.hidden').toggle();
    });
});
	jQuery(document).ready(function ($) {
    $('.column-8').on('click', function(){
    	$(this).children('.hidden').toggle();
    });
});
//Column 9
		jQuery(document).ready(function ($) {
    $('.column-9').on('click', function(){
    	$(this).children('.hidden').toggle();
    });
});
//Column 10
		jQuery(document).ready(function ($) {
    $('.column-10').on('click', function(){
    	$(this).children('.hidden').toggle();
    });
});

</script>
<style>
.tablepress .sorting_asc{
	background-color:#d9edf7;
}

.tablepress .sorting:hover, .tablepress .sorting_asc, .tablepress .sorting_desc {
    background-color: #d9edf7;
}
	
	.hidden{
		display:none;
	}

	i.material-icons{	
 font-size:24px;
	color:#003990; 
	cursor:pointer;
	float:right;
	}
	
	.paginate_button  {
	background-color:#003990;
    color: #FFFFFF;
	}
	.paginate_button:hover  {
	background-color:#ffffff!important;
    color: #FFFFFF;
	}
		.paginate_button  a{
    color: #FFFFFF!important;
	}
	.paginate_button  a:hover{
    color: #003990!important;
	}
	.paginate_button.disabled a{
		color:#003990!important;
	}
</style>
<?php
};
?>
