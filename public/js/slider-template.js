


//Preloader

	$(window).load(function() {
		$("#preloader").delay(350).fadeOut("slow");
	})







//Home fit screen


	/*global $:false */
	$(function(){"use strict";
		$('.home-top').css({'height':($(window).height())+'px'});
		$(window).resize(function(){
		$('.home-top').css({'height':($(window).height())+'px'});
		});
	});




//Home text rotator

$(".rotator > div:gt(0)").hide();
setInterval(function() {
  $('.rotator > div:first')
    .fadeOut(0)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('.rotator');
},  3000);





//Home Background Slider

        $(function(){

            $.mbBgndGallery.buildGallery({
                containment:"#home",
                timer:4000,
                effTimer:700,
                controls:"#controls",
                grayScale:false,
                shuffle:false,
                preserveWidth:false,
                effect:"slideDown",
				effect:{enter:{top:"-100%",opacity:1},exit:{top:0,opacity:0}, enterTiming:"ease-in", exitTiming:"ease-in"},

                // If your server allow directory listing you can use:
                // (however this doesn't work locally on your computer)

                //folderPath:"testImage/",

                // else:

                 images:[
                 "images/1.jpg",
                 "images/2.jpg",
                 "images/3.jpg"
                 ],

                onStart:function(){},
                onPause:function(){},
                onPlay:function(opt){},
                onChange:function(opt,idx){},
                onNext:function(opt){},
                onPrev:function(opt){}
            });


        });



//Navigation

$('ul.slimmenu').on('click',function(){
var width = $(window).width();
if ((width <= 800)){
    $(this).slideToggle();
}
});

			var currentIndex = 2;
			var currentId = "privateBanking";
$('ul.slimmenu').slimmenu(
{
    resizeWidth: '800',
    collapserTitle: '',
    easingEffect:'easeInOutQuint',
    animSpeed:'medium',
    indentChildren: true,
    childrenIndenter: '&raquo;'
});

			var colors = {
					"home" : {
						"background" : "",
						"index" : 0
					},
					"about" : {
						"background" : "",
						"index" : 1
					},
					"privateBanking" : {
						"background" : "",
						"index" : 2
					},
					"privateWealthManagement" : {
						"background" : "",
						"index" : 2.1
					},
					"investmentAdvisory" : {
						"background" : "",
						"index" : 2.12
					},
					"wealthPlanning" : {
						"background" : "",
						"index" : 2.13
					},
					"philanthropicAdvisory" : {
						"background" : "",
						"index" : 2.14
					},
					"trustServices" : {
						"background" : "",
						"index" : 2.15
					},
					"privateClientLending" : {
						"background" : "",
						"index" : 2.16
					},
					"centerForWomenAndWealth" : {
						"background" : "",
						"index" : 2.17
					},
					"conversationsOnWomenWealthAndLeadership" : {
						"background" : "",
						"index" : 2.171
					},
					"corporateAdvisoryAndBanking" : {
						"background" : "",
						"index" : 2.2
					},
					"corporateAdvisory" : {
						"background" : "",
						"index" : 2.21
					},
					"corporateBanking" : {
						"background" : "",
						"index" : 2.23
					},
					"centerForFamilyBusiness" : {
						"background" : "",
						"index" : 2.24
					},
					"definingLegacyAndTheFutureOfTheBusiness" : {
						"background" : "",
						"index" : 2.241
					},
					"buildingASupportTeam" : {
						"background" : "",
						"index" : 2.242
					},
					"successionPlanningManagementAndOwnership" : {
						"background" : "",
						"index" : 2.243
					},
					"capitalPolicies" : {
						"background" : "",
						"index" : 2.244
					},
					"employmentPolicies" : {
						"background" : "",
						"index" : 2.245
					},
					"governanceAndCommunications" : {
						"background" : "",
						"index" : 2.246
					},
					"distributionsAndFamilyLiquidity" : {
						"background" : "",
						"index" : 2.247
					},
					"balancingCompetingInterests" : {
						"background" : "",
						"index" : 2.248
					},
					"privateEquity" : {
						"background" : "",
						"index" : 3.4
					},
					"aboutWingate" : {
						"background" : "",
						"index" : 3.5
					},
					"investmentProfile" : {
						"background" : "",
						"index" : 3.6
					},
					"investmentStrategyAndTransactionTypes" : {
						"background" : "",
						"index" : 3.7
					},
					"selectPortfolioCompanies" : {
						"background" : "",
						"index" : 3.71
					},
					"investmentManagement" : {
						"background" : "",
						"index" : 4
					},
					"publicEquity" : {
						"background" : "",
						"index" : 4.1
					},
					"usLargeCapEquity" : {
						"background" : "",
						"index" : 4.11
					},
					"globalEquity" : {
						"background" : "",
						"index" : 4.12
					},
					"usSmallAndMidCapEquity" : {
						"background" : "",
						"index" : 4.13
					},
					"fixedIncome" : {
						"background" : "",
						"index" : 4.14
					},
					"taxableFixedIncomeStrategies" : {
						"background" : "",
						"index" : 4.15
					},
					"taxExemptFixedIncomeStrategy" : {
						"background" : "",
						"index" : 4.16
					},
					"usTipsStrategy" : {
						"background" : "",
						"index" : 4.17
					},
					"openAccount" : {
						"background" : "",
						"index" : 4.18
					},
					"esgApproach" : {
						"background" : "",
						"index" : 4.19
					},
					"investorServices" : {
						"background" : "",
						"index" : 5
					},
					"custodyAndFundServices" : {
						"background" : "",
						"index" : 5.1
					},
					"custody" : {
						"background" : "",
						"index" : 5.11
					},
					"depositaryAndTrustee" : {
						"background" : "",
						"index" : 5.12
					},
					"fundAccounting" : {
						"background" : "",
						"index" : 5.13
					},
					"fundAdministration" : {
						"background" : "",
						"index" : 5.14
					},
					"transferAgency" : {
						"background" : "",
						"index" : 5.15
					},
					"globalTax" : {
						"background" : "",
						"index" : 5.16
					},
					"collateralManagementCustody" : {
						"background" : "",
						"index" : 5.17
					},
					"fundOrderAndCustody" : {
						"background" : "",
						"index" : 5.18
					},
					"specialistExpertise" : {
						"background" : "",
						"index" : 5.2
					},
					"crossBorderFunds" : {
						"background" : "",
						"index" : 5.21
					},
					"greaterChina" : {
						"background" : "",
						"index" : 5.211
					},
					"latinAmerica" : {
						"background" : "",
						"index" : 5.212
					},
					"japan" : {
						"background" : "",
						"index" : 5.213
					},
					"dublin" : {
						"background" : "",
						"index" : 5.214
					},
					"luxembourg" : {
						"background" : "",
						"index" : 5.215
					},
					"globalServiceModel" : {
						"background" : "",
						"index" : 5.216
					},
					"usFunds" : {
						"background" : "",
						"index" : 5.22
					},
					"consultantsAndAdvisors" : {
						"background" : "",
						"index" : 5.23
					},
					"distributionIntelligence" : {
						"background" : "",
						"index" : 5.24
					},
					"alternativeFunds" : {
						"background" : "",
						"index" : 5.25
					},
					"realAssetsAndInfrastructure" : {
						"background" : "",
						"index" : 5.251
					},
					"privateEquityAlternativeFunds" : {
						"background" : "",
						"index" : 5.252
					},
					"hedgeFunds" : {
						"background" : "",
						"index" : 5.253
					},
					"syndicatedAndOriginatedDebt" : {
						"background" : "",
						"index" : 5.254
					},
					"exchangeTradedFunds" : {
						"background" : "",
						"index" : 5.26
					},
					"insurance" : {
						"background" : "",
						"index" : 5.27
					},
					"regulatoryIntelligence" : {
						"background" : "",
						"index" : 5.28
					},
					"markets" : {
						"background" : "",
						"index" : 5.3
					},
					"foreignExchange" : {
						"background" : "",
						"index" : 5.31
					},
					"tokyoFixingRates" : {
						"background" : "",
						"index" : 5.311
					},
					"termsAndConditions" : {
						"background" : "",
						"index" : 5.312
					},
					"regulatoryReportingRequirements" : {
						"background" : "",
						"index" : 5.313
					},
					"fxDisclosure" : {
						"background" : "",
						"index" : 5.314
					},
					"activeFxExecution" : {
						"background" : "",
						"index" : 5.32
					},
					"infoFx" : {
						"background" : "",
						"index" : 5.33
					},
					"currencyHedging" : {
						"background" : "",
						"index" : 5.34
					},
					"securitiesLending" : {
						"background" : "",
						"index" : 5.35
					},
					"marketIntelligence" : {
						"background" : "",
						"index" : 5.36
					},
					"investmentOperationsAndTechnologySolutions" : {
						"background" : "",
						"index" : 5.4
					},
					"technologyServices" : {
						"background" : "",
						"index" : 5.41
					},
					"dataConnectivityAndApplicationsViaInfomediary" : {
						"background" : "",
						"index" : 5.411
					},
					"globalCustodyDirect" : {
						"background" : "",
						"index" : 5.412
					},
					"accountOperatorDirectForUSDepositories" : {
						"background" : "",
						"index" : 5.413
					},
					"middleOfficeOutsourcing" : {
						"background" : "",
						"index" : 5.42
					},
					"targetedTechnologySolutionsViaInfomediary" : {
						"background" : "",
						"index" : 5.421
					},
					"infoRecon" : {
						"background" : "",
						"index" : 5.4211
					},
					"infoNav" : {
						"background" : "",
						"index" : 5.4212
					},
					"hostedOperationsAndReporting" : {
						"background" : "",
						"index" : 5.422
					},
					"investmentAccountingAndEnterpriseDataSupport" : {
						"background" : "",
						"index" : 5.423
					},
					"ourFirm" : {
						"background" : "",
						"index" : 5.5
					},
					"thePartnership" : {
						"background" : "",
						"index" : 5.51
					},
					"ourMissionAndProfile" : {
						"background" : "",
						"index" : 5.52
					},
					"sustainability" : {
						"background" : "",
						"index" : 5.53
					},
					"philanthropy" : {
						"background" : "",
						"index" : 5.54
					},
					"policiesAndDisclosures" : {
						"background" : "",
						"index" : 5.55
					},
					"importantStatementsAndDisclosures" : {
						"background" : "",
						"index" : 5.551
					},
					"dataProtectionNotice" : {
						"background" : "",
						"index" : 5.5511
					},
					"onlineSecurity" : {
						"background" : "",
						"index" : 5.5512
					},
					"bcpStatement" : {
						"background" : "",
						"index" : 5.5513
					},
					"regulationE" : {
						"background" : "",
						"index" : 5.5514
					},
					"additionalDisclosures" : {
						"background" : "",
						"index" : 5.5515
					},
					"confidentialEthicsReporting" : {
						"background" : "",
						"index" : 5.5516
					},
					"legal" : {
						"background" : "",
						"index" : 5.552
					},
					"privacyPolicy" : {
						"background" : "",
						"index" : 5.553
					},
					"cookiePolicy" : {
						"background" : "",
						"index" : 5.5531
					},
					"manageCookies" : {
						"background" : "",
						"index" : 5.5532
					},
					"personalInformationRequest" : {
						"background" : "",
						"index" : 5.5533
					},
					"newAccountPolicy" : {
						"background" : "",
						"index" : 5.554
					},
					"usaPatriotAct" : {
						"background" : "",
						"index" : 5.555
					},
					"careers" : {
						"background" : "",
						"index" : 7
					},
					"sustainability" : {
						"background" : "",
						"index" : 8
					},
					"contact" : {
						"background" : "",
						"index" : 9
					}

			};

			function goTo(id){
				var obj = eval("colors."+id);

				$("body").css("background",obj.background);
				$("ul.slimmenu li a").css("color",obj.background);
				if(obj.index > currentIndex){
					$(".active").addClass("off");
					$(".active").transition({
						x : -100,
						opacity : 0,
						zIndex : 0
					},600);

					$("#"+currentId).removeClass("active");

					$("#"+id).addClass("active");
					$("#"+id).transition({
						perspective: '100px',
						rotate3d: '1,1,0,90deg'
					},0,function(){
						$("#"+id).removeClass("off");
						$("#"+id).transition({
							rotate3d: '0,0,0,0deg',
						x : 0,
							opacity : 1,
							zIndex : 2
						},600);
					});
				}else if(obj.index < currentIndex){
					$(".active").addClass("off");
					$(".active").transition({
						x : 100,
						opacity : 0,
						zIndex : 0
					},600);
					$("#"+currentId).removeClass("active");


					$("#"+id).addClass("active");
					$("#"+id).transition({
						perspective: '100px',
						rotate3d: '1,1,0,-90deg'
					},0,function(){
						$("#"+id).removeClass("off");
						$("#"+id).transition({
							rotate3d: '0,0,0,0deg',
						x : 0,
							opacity : 1,
							zIndex : 2
						},600);
					});
				}
				currentIndex = obj.index;
				currentId = id;

			}



//Sliders

	$(document).ready(function(){
		$('.slider1').bxSlider({
			adaptiveHeight: true,
			touchEnabled: true,
			pager: false,
			controls: true,
			auto: false,
			slideMargin: 1
		});
	});


	$(document).ready(function(){
		$('.slider2').bxSlider({
			adaptiveHeight: true,
			touchEnabled: true,
			pager: false,
			controls: true,
			auto: false,
			slideMargin: 1
		});
	});

	$(document).ready(function(){
		$('.slider3').bxSlider({
			adaptiveHeight: true,
			touchEnabled: true,
			pager: false,
			controls: true,
			auto: false,
			slideMargin: 1
		});
	});


	$(document).ready(function(){
		$('.slider4').bxSlider({
			adaptiveHeight: true,
			touchEnabled: true,
			pager: false,
			controls: true,
			auto: false,
			slideMargin: 1
		});
	});


	$(document).ready(function(){
		$('.slider5').bxSlider({
			adaptiveHeight: true,
			touchEnabled: true,
			pager: false,
			controls: true,
			auto: false,
			slideMargin: 1
		});
	});







//Responsive video

  $(document).ready(function(){
    $(".media").fitVids();
  });









//Modal windows

$(function() {
    "use strict";

    $('#fall').on('click', function () {
        $.fn.custombox( this, {
            effect: 'fall'
        });
        return false;
    });


    var slide_position = ['center'];

    $('#slide').on('click', function () {
        $.fn.custombox( this, {
            effect:     'slide',
            position:   slide_position[Math.floor( Math.random() * slide_position.length )]
        });
        return false;
    });


    $('#newspaper').on('click', function () {
        $.fn.custombox( this, {
            effect: 'newspaper'
        });
        return false;
    });


    $('#sidefall').on('click', function () {
        $.fn.custombox( this, {
            effect: 'sidefall'
        });
        return false;
    });


	});



//Portfolio filter





jQuery(document).ready(function () {
	(function ($) {


		var container = $('.all-works');


		function getNumbColumns() {
			var winWidth = $(window).width(),
				columnNumb = 1;


			if (winWidth > 1500) {
				columnNumb = 3;
			} else if (winWidth > 1200) {
				columnNumb = 3;
			} else if (winWidth > 900) {
				columnNumb = 2;
			} else if (winWidth > 600) {
				columnNumb = 1;
			} else if (winWidth > 300) {
				columnNumb = 1;
			}

			return columnNumb;
		}


		function setColumnWidth() {
			var winWidth = $(window).width(),
				columnNumb = getNumbColumns(),
				postWidth = Math.floor(winWidth / columnNumb);

		}

		$('#portfolio-filter #filter a').click(function () {
			var selector = $(this).attr('data-filter');

			$(this).parent().parent().find('a').removeClass('current');
			$(this).addClass('current');

			container.isotope( {
				filter : selector
			});

			setTimeout(function () {
				reArrangeProjects();
			}, 300);


			return false;
		});

		function reArrangeProjects() {
			setColumnWidth();
			container.isotope('reLayout');
		}


		container.imagesLoaded(function () {
			setColumnWidth();


			container.isotope( {
				itemSelector : '.one-work',
				layoutMode : 'masonry',
				resizable : false
			} );
		} );





		$(window).on('debouncedresize', function () {
			reArrangeProjects();

		} );


	} )(jQuery);
} );




/* DebouncedResize Function */
	(function ($) {
		var $event = $.event,
			$special,
			resizeTimeout;


		$special = $event.special.debouncedresize = {
			setup : function () {
				$(this).on('resize', $special.handler);
			},
			teardown : function () {
				$(this).off('resize', $special.handler);
			},
			handler : function (event, execAsap) {
				var context = this,
					args = arguments,
					dispatch = function () {
						event.type = 'debouncedresize';

						$event.dispatch.apply(context, args);
					};


				if (resizeTimeout) {
					clearTimeout(resizeTimeout);
				}


				execAsap ? dispatch() : resizeTimeout = setTimeout(dispatch, $special.threshold);
			},
			threshold : 150
		};
	} )(jQuery);





//Colorbox single project pop-up

$(document).ready(function(){
$(".iframe").colorbox({iframe:true, width:"100%", height:"100%"});
});

$(".group1").colorbox({rel:'group1'});






// Switcher CSS
  $(document).ready(function() {
"use strict";
    $("#hide, #show").click(function () {
        if ($("#show").is(":visible")) {

            $("#show").animate({
                "margin-left": "-500px"
            }, 500, function () {
                $(this).hide();
            });

            $("#switch").animate({
                "margin-left": "0px"
            }, 500).show();
        } else {
            $("#switch").animate({
                "margin-left": "-500px"
            }, 500, function () {
                $(this).hide();
            });
            $("#show").show().animate({
                "margin-left": "0"
            }, 500);
        }
    });

});




//Google map

/*global $:false */
    var map;
    $(document).ready(function(){"use strict";
      map = new GMaps({
    disableDefaultUI: true,
    scrollwheel: false,
        el: '#map',
        lat: 44.789511,
        lng: 20.43633
      });
      map.drawOverlay({
        lat: map.getCenter().lat(),
        lng: map.getCenter().lng(),
        layer: 'overlayLayer',
        content: '<div class="overlay"></div>',
        verticalAlign: 'center',
        horizontalAlign: 'center'
      });
        var styles = [
  {
    "featureType": "poi",
    "stylers": [
      { "visibility": "on" },
      { "weight": 0.9 },
      { "lightness": 37 },
      { "gamma": 0.62 },
      { "hue": "#ff0000" },
      { "saturation": -93 }
    ]
  },{
    "featureType": "poi",
    "stylers": [
      { "hue": "#ff0000" },
      { "saturation": -1 },
      { "color": "#ffffff" },
      { "weight": 0.2 }
    ]
  },{
    "featureType": "road",
    "stylers": [
      { "hue": "#ff0000" },
      { "saturation": -98 }
    ]
  },{
    "featureType": "landscape",
    "stylers": [
      { "hue": "#ff0000" },
      { "saturation": -89 }
    ]
  },{
    "featureType": "water",
    "stylers": [
      { "weight": 0.4 },
      { "saturation": -38 }
    ]
  }
];

        map.addStyle({
            styledMapName:"Styled Map",
            styles: styles,
            mapTypeId: "map_style"
        });

        map.setStyle("map_style");
    });










