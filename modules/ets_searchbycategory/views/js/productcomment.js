/*
 * Copyright ETS Software Technology Co., Ltd
 *
 * NOTICE OF LICENSE
 *
 * This file is not open source! Each license that you purchased is only available for 1 website only.
 * If you want to use this file on more websites (or projects), you need to purchase additional licenses.
 * You are not allowed to redistribute, resell, lease, license, sub-license or offer our resources to any third party.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future.
 *
 * @author ETS Software Technology Co., Ltd
 * @copyright  ETS Software Technology Co., Ltd
 * @license    Valid for 1 website (or project) for each purchase of license
*/


function initRating() {
        sbcProductListingComments.init();
        sbcProductListingComments.load();
        sbcProductListingComments.loadProductsData();
}

var sbcProductListingComments = (function () {

    var data = {
        productIDs: [],
        commentsLoadingInProgress: false,
        ajaxIDsLimit: 50,
        ajaxUrl: ''
    }

    var DOMStrings = {
        productListReviewsContainer: '.product-list-reviews',
        productListReviewsNumberOfComments: '.comments-nb',
        productListReviewsStarsContainer: '.grade-stars',
        productContainer: '.sbc-item-wrapper'
    };

    var DOMClasses =  {
        inProgress: 'reviews-loading',
        reviewsLoaded: 'reviews-loaded',
        hasReviews: 'has-reviews'
    };

    function setEvents() {
        prestashop.on('updateProductList', function() {
            addProductsIDs();
        });
    }


    function setAjaxUrl() {
        if (data.ajaxUrl !== '')
            return;
        var url = $(DOMStrings.productListReviewsContainer).first().data('url');
        data.ajaxUrl = url;
    }

    function getNewProductsReviewsElements() {
        var $productListReviews = $(DOMStrings.productContainer)
            .not('.' + DOMClasses.reviewsLoaded + ', .' + DOMClasses.inProgress)
            .addClass(DOMClasses.inProgress)
            .find(DOMStrings.productListReviewsContainer);

        return $productListReviews;
    }

    function addProductsIDs() {

        var $productsList = getNewProductsReviewsElements(),
            seenIds = {};
        console.log($productsList);
        $productsList.each(function () {
            var id = $(this).data('id');
            seenIds[id] = true;
        });


        var IDsArray = Object.keys(seenIds);
        var prevDataIDs = data.productIDs.splice(0);
        data.productIDs = prevDataIDs.concat(IDsArray);

        if (!data.commentsLoadingInProgress) {
            loadProductsData();
        }
    }

    function loadProductsData() {
        if (data.productIDs.length === 0)
            return;
        data.commentsLoadingInProgress = true;
        var dataIDsCopy = data.productIDs.slice(0);
        selectedProductIDs = dataIDsCopy.splice(0, data.ajaxIDsLimit);

        $.get(data.ajaxUrl, { id_products: selectedProductIDs }, function (jsonData) {
            if (jsonData) {
                $.each(jsonData.products, function(i, elem) {
                    var productData = elem;
                    var $productsReviewsContainer = $('.product-list-reviews[data-id="' + productData.id_product + '"]');

                    $productsReviewsContainer.each(function () {
                        var $self = $(this);

                        if (productData.comments_nb > 0) {
                            $self.find(DOMStrings.productListReviewsStarsContainer).rating({ grade: productData.average_grade, starWidth: 16 });
                            $self.find(DOMStrings.productListReviewsNumberOfComments).text('(' + productData.comments_nb + ')');
                            $self.closest(DOMStrings.productContainer).addClass(DOMClasses.hasReviews);
                            $self.css('visibility', 'visible');
                        }

                        $self.closest(DOMStrings.productContainer).addClass(DOMClasses.reviewsLoaded);
                        $self.closest(DOMStrings.productContainer).removeClass(DOMClasses.inProgress);

                    });
                    data.productIDs.shift();
                });

                data.commentsLoadingInProgress = false;
                if (data.productIDs.length > 0) {
                    loadProductsData();
                }

            }
        });
    }


    return {
        load: function () {
            addProductsIDs();
        },
        init: function () {
            setAjaxUrl();
            setEvents();
        },
        loadProductsData:function (){
            loadProductsData();
        }
    }
})();
