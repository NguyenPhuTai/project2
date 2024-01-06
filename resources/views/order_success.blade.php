<!DOCTYPE html>
<html class="thankyou-page">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<meta name="description" content="pocomart - Cảm ơn" />
	<title>pocomart - Cảm ơn</title>

	<script>
		(function () {
			function asyncLoad() {
				var urls = [] || [];
				for (var i = 0; i < urls.length; i++) {
					var s = document.createElement('script');
					s.type = 'text/javascript';
					s.async = true;
					s.src = urls[i];
					var x = document.getElementsByTagName('script')[0];
					x.parentNode.insertBefore(s, x);
				}
			};
			window.attachEvent ? window.attachEvent('onload', asyncLoad) : window.addEventListener('load', asyncLoad, false);
		})();
	</script>
	
	
	
	
	

	
<link rel="shortcut icon" href="//bizweb.dktcdn.net/assets/sapo_favicon.png" type="image/x-icon" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css" />

	<link rel="stylesheet" href="/dist/css/checkout.vendor.min.css?v=4fcd86c">


	<link rel="stylesheet" href="/dist/css/checkout.min.css?v=ce7712f">

<!-- Begin checkout custom css -->
<style>
	

    body {
    color: #737373;
    background: #fff;
    font-size: 14px;
    font-family: Helvetica Neue,sans-serif;
    line-height: 1.42857143em;
    overflow-wrap: break-word;
    overflow-x: hidden;
    word-wrap: break-word;
    word-break: break-word;
    padding: 0;
    margin: 0
}

@media(min-width: 1000px) {
    body {
        height:100vh
    }
}

h1,h2,h3,h4,h5,h6 {
    margin: 0;
    font-weight: normal
}

h2 {
    color: #333
}

h1,.heading-1 {
    font-size: 2em
}

a,.icon-print {
    color: #2a9dcc;
    text-decoration: none;
    cursor: pointer
}

a:hover,.icon-print:hover {
    color: #2a6395
}

.field__input,.input-checkbox,.input-radio,button,textarea {
    color: inherit;
    font: inherit;
    margin: 0;
    padding: 0;
    -webkit-appearance: none;
    -moz-appearance: none;
    -webkit-font-smoothing: inherit;
    border: none;
    background: transparent;
    line-height: normal
}

select {
    -moz-appearance: none;
    -webkit-appearance: none
}

table {
    border-collapse: collapse;
    border-spacing: 0;
    font-size: 1em;
    width: 100%;
    margin: 0
}

td,th {
    font-weight: normal
}

td:first-child,th:first-child {
    padding-left: 0;
    text-align: left
}

td:last-child,th:last-child {
    text-align: right
}

form {
    margin: 0;
    padding: 0
}

.layout-flex {
    display: flex;
    align-items: baseline
}

.layout-flex--wrap {
    flex-wrap: wrap
}

.layout-flex__item--stretch {
    flex: 1 1 auto
}

.layout-flex--row-reverse {
    flex-direction: row-reverse
}

.btn {
    cursor: pointer;
    display: inline-block;
    background-color: #357ebd;
    border-color: #2f71a9;
    background-clip: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    border: 1px transparent solid;
    border-radius: 5px;
    color: #fff;
    font-weight: 500;
    padding: .98em 1.7em;
    text-align: center;
    position: relative
}

.btn--large {
    font-size: 1.1rem
}

.btn--disabled {
    opacity: .6
}

.btn:hover {
    background-color: #2a6395;
    border-color: #225179;
    color: #fff
}

@media(min-width: 1000px) {
    .btn-complete-order {
        min-width:20em
    }
}

.hide {
    display: none !important
}

html,body {
    width: 100%
}

body,.content,.content .wrap,.main,.main__content,.step,.content>form {
    display: flex;
    flex: 1 0 auto;
    flex-direction: column
}

.content {
    overflow: hidden
}

.content .wrap {
    flex-direction: column-reverse
}

.main {
    width: 100%;
    padding-top: 1.5em
}

.main--nosidebar {
    padding-top: 0
}

.main--nosidebar .main__header {
    padding-bottom: 0
}

.main__header {
    padding-bottom: 1.5em
}

.multistep .main__header {
    padding-bottom: 1em
}

.main__content {
    padding-bottom: 1.5em
}

.main__footer {
    display: flex;
    flex: 1 0 auto;
    flex-direction: column;
    padding: 1em 0;
    text-align: right
}

.main__policy {
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;
    justify-content: flex-end
}

.main__policy>li {
    margin-left: 1.5em
}

.main__policy>li:first-child {
    margin-left: 0
}

.main__content+.main__footer {
    border-top: 1px solid rgba(175,175,175,.34)
}

.main .logo {
    display: none
}

.main .logo.logo--always-show {
    display: inline-block
}

.logo__image--small {
    max-height: 2.14286em
}

.logo__image--medium {
    max-height: 3.28571em
}

.logo__image--large {
    max-height: 4.57143em
}

.shop__name {
    line-height: 1.12
}

@media(min-width: 1000px) {
    .main {
        width:52%;
        padding: 2em 2em 0 2em
    }

    .multistep .main {
        padding: 4em 6% 0 0
    }

    .main .logo {
        display: block
    }

    .logo__image--small {
        max-height: 3.85714em
    }

    .logo__image--medium {
        max-height: 6.28571em
    }

    .logo__image--large {
        max-height: 8.71429em
    }

    .logo--left {
        text-align: left
    }

    .logo--center {
        text-align: center
    }

    .logo--right {
        text-align: right
    }

    .main--nosidebar .main__header {
        padding-bottom: 1.5em
    }

    .main__footer {
        text-align: right
    }

    .main__policy {
        flex-direction: row;
        justify-content: flex-end
    }

    .main__policy>li:last-child {
        margin-right: 0
    }
}

.wrap {
    display: block;
    width: 100%;
    box-sizing: border-box;
    padding: 0 1em;
    font-size: 14px;
    max-width: 40em;
    margin: 0 auto
}

.wrap:after,.wrap:before {
    content: "";
    display: table
}

.wrap:after {
    clear: both
}

.wrap--mobile-fluid {
    max-width: 100%;
    padding: 0
}

.wrap--mobile-fluid .main__footer {
    padding-left: 1em;
    padding-right: 1em
}

@media(min-width: 768px) {
    .wrap--mobile-fluid {
        max-width:50em
    }
}

@media(min-width: 1000px) {
    .wrap {
        padding:0 2em;
        max-width: 95em
    }

    .multistep .wrap {
        box-sizing: content-box;
        max-width: 78.5em;
        width: 85%;
        padding: 0 5%
    }

    .wrap--mobile-fluid .main__footer {
        padding-left: 0;
        padding-right: 0
    }
}

.banner {
    padding: 1.5em 0;
    text-align: center
}

.col {
    float: left;
    width: 100%;
    box-sizing: border-box;
    padding-top: 2em
}

.col--half {
    width: 100%;
    text-align: center
}

.col--secondary {
    float: right
}

@media(min-width: 768px) {
    .col--md-two {
        padding-top:0;
        width: 50%
    }
}

.row:first-child>.col:first-child {
    padding-top: 0
}

.row::after {
    content: "";
    display: table;
    clear: both
}

@media(min-width: 1000px) {
    .banner {
        display:none
    }

    .order-summary-toggle {
        display: none
    }

    .content .wrap {
        flex-direction: row
    }

    .row {
        margin-left: -10px;
        margin-right: -10px
    }

    .col {
        padding-left: 1em;
        padding-right: 1em;
        padding-top: 0
    }

    .col--half {
        width: 50%
    }

    .col--two {
        width: 50%
    }

    .col--primary {
        width: 60%
    }

    .col--secondary {
        width: 40%
    }
}

.order-summary-toggle {
    background: #fafafa;
    border-top: 1px solid #e6e6e6;
    border-bottom: 1px solid #e6e6e6;
    padding: 1.25em 0;
    text-align: left;
    width: 100%;
    outline: none
}

.order-summary-toggle__inner {
    display: flex;
    justify-content: space-between;
    align-items: center
}

.expandable:after {
    content: "ï„‡";
    font-family: FontAwesome;
    font-size: 1em;
    display: inline-block;
    text-shadow: none;
    position: relative;
    -webkit-transition: all .3s ease 0s;
    -o-transition: all .3s ease 0s;
    transition: all .3s ease 0s
}

.toggled .expandable:after,.toggled.expandable:after {
    content: "ï„†"
}

.step__footer {
    margin-top: 1.5em
}

.step__footer .previous-link {
    margin-top: 1em
}

.step__btn-group {
    display: flex;
    flex-direction: column;
    text-align: center
}

.previous-link:hover .previous-link__arrow {
    transform: translateX(-3px)
}

.previous-link__arrow {
    display: inline-block;
    vertical-align: middle;
    font-style: normal;
    transition: all .2s ease-out;
    -webkit-transition: all .2s ease-out
}

.previous-link__content {
    vertical-align: middle
}

@media(min-width: 1000px) {
    .step__btn-group {
        flex-direction:row-reverse;
        justify-content: space-between
    }
}

.section {
    padding-top: 2em
}

.section--no-title {
    padding-top: 1em
}

.section--mobile-fluid {
    padding-left: 1em;
    padding-right: 1em
}

.section--relative {
    position: relative
}

.section--icon-heading {
    text-align: center;
    padding-left: 1em;
    padding-right: 1em
}

.section:first-child {
    padding-top: 0
}

.section__icon {
    margin-bottom: .5rem
}

@media(min-width: 1000px) {
    .section--icon-heading {
        text-align:inherit;
        display: flex;
        align-items: center;
        padding-left: 0;
        padding-right: 0
    }

    .section__icon {
        margin-right: 1rem
    }

    .section--mobile-fluid {
        padding-left: 0;
        padding-right: 0
    }
}

.section__header {
    margin-bottom: 12px
}

.section__title,.modal__title,.sidebar__title,.order-summary-toggle__text {
    color: #333;
    font-weight: 600;
    font-size: 1.15rem
}

.section__title--icon {
    margin: 0 3px;
    vertical-align: top
}

.section__content--bordered {
    border: 1px solid #dadada;
    padding: 1em;
    margin: 1em
}

.section__content::after,.section__content::before {
    content: "";
    display: table
}

.section__content::after {
    clear: both
}

.field {
    float: left;
    width: 100%;
    box-sizing: border-box;
    padding: .4em
}

.main .field--disabled .field__input,.field--disabled .field__input {
    background: #ddd;
    cursor: not-allowed
}

.main .field {
    padding: .4em
}

.field-group {
    width: 100%
}

@media(min-width: 1000px) {
    .field-group {
        display:flex
    }

    .field-group>.field {
        flex: 1
    }
}

.fieldset {
    margin: -.4em
}

.fieldset::before,.fieldset::after {
    content: "";
    display: table
}

.fieldset::after {
    clear: both
}

.fieldset--inline {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center
}

.fieldset--inline .btn {
    margin: .45em;
    width: 100%
}

@media(min-width: 1000px) {
    .fieldset--inline {
        flex-wrap:nowrap
    }

    .fieldset--inline .btn {
        width: auto
    }
}

.field__input-wrapper {
    position: relative
}

.field__input-wrapper--connected {
    display: flex
}

.field__input-wrapper--connected .field__input:first-of-type {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
    z-index: 1
}

.floating-labels .field__input-wrapper--connected .field__label {
    z-index: 2
}

.field__label {
    text-align: left;
    margin: .5em 0;
    display: block
}

.field__input {
    border-radius: 4px;
    width: 100%;
    display: block;
    box-sizing: border-box;
    padding: .94em .8em;
    border: 1px #d9d9d9 solid;
    height: 44px;
    background-color: #fff;
    color: #333
}

textarea.field__input {
    height: auto;
    resize: vertical
}

.input-radio:focus,.input-checkbox:focus,.field__input:focus {
    outline: none;
    border-color: #66afe9;
    box-shadow: 0 0 0 1px #66afe9
}

.field__input--select {
    padding-right: 2em;
    white-space: nowrap
}

.field__caret {
    display: block;
    position: absolute;
    top: 50%;
    right: 0;
    transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
    pointer-events: none;
    width: 2em;
    height: 43%;
    border-left: 1px rgba(179,179,179,.5) solid
}

.field__caret .fa {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    -webkit-transform: translate(-50%,-50%)
}

.field--error .field__input {
    border-color: #c23527;
    box-shadow: 0 0 0 1px #c23527
}

.floating-labels .field__label {
    position: absolute;
    top: 0;
    width: 100%;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    box-sizing: border-box;
    margin-top: .4em;
    margin-left: 1px;
    padding: 0 .8em;
    color: #999;
    z-index: 1;
    user-select: none;
    pointer-events: none;
    font-size: 1em;
    transform: translateY(6px)
}

.floating-labels .field--show-floating-label .field__label {
    transform: none;
    font-size: .84em;
    padding-left: .9em
}

.floating-labels .field--show-floating-label .field__input {
    padding-top: 1.5em;
    padding-bottom: .35em
}

.animate-floating-labels .field__label {
    transition: all .2s ease-out;
    -webkit-transition: all .2s ease-out
}

.field__message {
    line-height: 1.3em;
    margin: .5em .2em
}

.field__message.field__message--error {
    color: #c23527;
    display: none
}

.field__message--error.field__message--error-always-show {
    display: block
}

.field--error .field__message--error {
    display: block
}

.field__input-btn-wrapper {
    display: flex;
    justify-content: space-between;
    align-items: center
}

.field__input-btn-wrapper--vertical {
    align-items: stretch;
    flex-direction: column;
    text-align: center;
    margin: 1em 0
}

.field__input-btn-wrapper--vertical .btn-checkout {
    margin-bottom: 1em
}

.field__input-btn-wrapper--floating {
    justify-content: center
}

@media(min-width: 1000px) {
    .field__input-btn-wrapper--floating {
        justify-content:flex-end
    }
}

.field__input-btn {
    width: auto;
    margin-left: .85714em;
    white-space: nowrap
}

.field__input-btn-wrapper .field__input-wrapper {
    flex-grow: 1
}

.sidebar__header {
    border-bottom: 1px solid #e1e1e1;
    padding-top: 20px;
    padding-bottom: 20px;
    display: none
}

.sidebar__footer {
    margin-top: 1.5em;
    display: flex;
    align-items: center;
    justify-content: space-between
}

.sidebar {
    color: #717171;
    position: relative;
    width: 100%
}

.sidebar--disabled {
    opacity: .7
}

.visually-hidden {
    border: 0;
    clip: rect(0,0,0,0);
    width: 2px;
    height: 2px;
    margin: -2px;
    overflow: hidden;
    padding: 0;
    position: absolute
}

.sidebar::after {
    content: "";
    display: block;
    width: 300%;
    position: absolute;
    top: 0;
    left: -100%;
    bottom: 0;
    background: #fafafa;
    z-index: -1;
    box-shadow: 0 -1px 0 #e1e1e1 inset
}

.sidebar .field__input {
    border-color: #d5d5d5
}

@media(min-width: 1000px) {
    .sidebar__header {
        display:block
    }

    .sidebar {
        width: 32%
    }

    .multistep .sidebar {
        width: 45%
    }

    .sidebar__header,.sidebar__content {
        padding-left: 2em
    }

    .multistep .sidebar__header,.multistep .sidebar__content {
        padding-left: 10%
    }

    .sidebar::after {
        left: 0;
        background-position: left top;
        -webkit-box-shadow: 1px 0 0 #e1e1e1 inset;
        box-shadow: 1px 0 0 #e1e1e1 inset
    }
}

.product-table tbody th,.stock-table tbody th {
    padding-left: 1em;
    font-weight: 500;
    color: #333;
    padding-top: 0;
    padding-bottom: 0
}

.product-table thead th,.stock-table thead th {
    white-space: nowrap
}

.product-table td,.stock-table td {
    padding-left: 1em
}

.product-table td:first-child,.stock-table td:first-child {
    padding-left: 0
}

.product-table td,.product-table th,.stock-table td,.stock-table th {
    padding-top: 0;
    padding-bottom: 0
}

.stock-table .stock-table__header th {
    border-bottom: 1px solid #e6e6e6;
    padding-bottom: 1em
}

.stock-table tbody td,.stock-table tbody th {
    padding-top: 1em;
    padding-bottom: 1em;
    border-bottom: 1px solid #e6e6e6
}

.product-thumbnail {
    width: 50px;
    height: 50px;
    border-radius: 8px;
    background: #fff;
    position: relative
}

.product-thumbnail::after {
    content: '';
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    border-radius: 8px;
    border: 1px rgba(0,0,0,.1) solid;
    z-index: 2
}

.product-thumbnail__wrapper {
    width: 100%;
    height: 100%;
    position: relative;
    overflow: hidden;
    border-radius: 8px
}

.product-thumbnail__image {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    max-width: 100%;
    max-height: 100%;
    margin: auto
}

.product-thumbnail__quantity {
    font-size: .78em;
    white-space: nowrap;
    padding: 0 .62em;
    border-radius: 2em;
    background-color: #2a9dcc;
    color: #fff;
    position: absolute;
    right: -.9em;
    top: -.55em;
    z-index: 3;
    box-sizing: border-box;
    min-width: 1.75em;
    height: 1.75em;
    text-align: center;
    line-height: 1.75em
}

@media(min-width: 1000px) {
    .hide-on-desktop {
        display:none !important
    }
}

@media(max-width: 999px) {
    .hide-on-mobile {
        display:none !important
    }
}

.product td {
    padding-top: 1em
}

.product__description {
    text-align: left;
    width: 100%
}

.product__price,.product__quantity {
    white-space: nowrap
}

.product__quantity>em {
    color: #969696;
    font-style: normal
}

.product__description__name,.product__description__property {
    display: block
}

.product__description__property {
    font-size: .85em;
    color: #969696
}

.total-line th,.total-line td {
    padding-top: .75em
}

.total-line__price {
    padding-left: 1.5em;
    text-align: right;
    white-space: nowrap
}

.total-line-table__tbody+.total-line-table__footer .total-line:first-child th,.total-line-table__tbody+.total-line-table__footer .total-line:first-child td {
    padding-top: 2em;
    position: relative
}

.sidebar .total-line-table__tbody+.total-line-table__footer .total-line:first-child th:before,.sidebar .total-line-table__tbody+.total-line-table__footer .total-line:first-child td:before {
    background-color: rgba(175,175,175,.34);
    content: '';
    position: absolute;
    top: 1em;
    left: 0;
    width: 100%;
    height: 1px
}

.payment-due__label-total {
    font-size: 1.2em
}

.payment-due__price {
    font-size: 1.5em;
    font-weight: 500;
    letter-spacing: -.04em;
    line-height: 1em;
    color: #2a9dcc
}

.order-summary--bordered {
    border: 1px solid #e1e1e1;
    background: #fff
}

.order-summary--bordered .order-summary__header {
    padding: 7px 15px;
    display: flex;
    justify-content: space-between
}

.order-summary--bordered .order-summary__section {
    padding: 7px 15px
}

.order-summary--bordered .order-summary__section--product-list {
    border-top: 1px solid #e1e1e1;
    padding-top: 0;
    padding-bottom: 0
}

.order-summary--bordered .order-summary__section--product-list tbody td,.order-summary--bordered .order-summary__section--product-list tbody th {
    border-bottom: 1px solid #e6e6e6;
    padding-top: 1em;
    padding-bottom: 1em
}

.order-summary--bordered .order-summary__section--product-list tbody tr:last-child td,.order-summary--bordered .order-summary__section--product-list tbody tr:last-child th {
    border-bottom: none
}

.order-summary__title {
    font-weight: 600
}

.order-summary__section--note {
    margin-top: 2em
}

.order-summary__section--note textarea {
    resize: vertical
}

.order-summary__section {
    padding-top: 1em;
    padding-bottom: 1em
}

.order-summary__section~.order-summary__section {
    border-top: 1px solid rgba(175,175,175,.34)
}

@media(max-width: 999px) {
    .order-summary--is-collapsed .order-summary--collapse-element {
        height:0;
        visibility: hidden;
        overflow: hidden;
        padding-top: 0;
        padding-bottom: 0
    }
}

.order-summary-toggle__total-recap {
    font-size: 1.12em;
    line-height: 1em;
    font-weight: 600;
    color: #2a9dcc
}

@media(min-width: 1000px) {
    .order-summary__sections {
        display:flex;
        flex-direction: column
    }

    .order-summary__section--is-scrollable {
        overflow-y: auto;
        max-height: calc(100vh - 480px)
    }
}

.order-summary__nav {
    margin-bottom: 1em
}

nav {
    display: flex
}

.progress-bar {
    display: flex;
    flex-wrap: wrap;
    counter-reset: line-number
}

.progress-bar__item {
    display: flex;
    align-items: center;
    position: relative;
    counter-increment: line-number
}

.progress-bar__item--muted {
    color: #999
}

.progress-bar__item--current {
    color: #000
}

.progress-bar__pipe::after {
    content: "ï„…";
    display: inline;
    margin: 0 .5em;
    font-family: FontAwesome
}

@media(min-width: 1000px) {
    nav {
        margin-top:2em
    }
}

.content-box {
    border: 1px solid #cecdcd;
    background: #fff;
    background-clip: padding-box;
    border-radius: 5px;
    color: #545454
}

.content-box__row {
    display: table;
    box-sizing: border-box;
    width: 100%;
    position: relative;
    padding: 1em
}

.content-box__row~.content-box__row {
    border-top: 1px solid #d9d9d9
}

.content-box__row:last-child {
    border-bottom-left-radius: 4px;
    border-bottom-right-radius: 4px
}

.content-box__row__desc {
    background-color: #f8f8f8;
    padding: 1.14em;
    margin: 1.14em -1.14em -1.14em -1.14em;
    border-color: rgba(175,175,175,.34);
    border-style: solid;
    border-width: 0 1px
}

.content-box__row:last-child .content-box__row__desc {
    border-bottom-left-radius: 4px;
    border-bottom-right-radius: 4px;
    border-bottom-width: 1px
}

.select-address-wrapper select {
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
    border-width: 0;
    border-bottom-width: 1px
}

.select-address__header {
    color: #4e4e4e;
    font-weight: bold
}

.select-address__header .fa {
    color: #08f
}

.select-address {
    color: #353535
}

.select-address td,.select-address th {
    text-align: left;
    padding: .4em .94em
}

.select-address tr:last-child>td {
    padding-bottom: 1em
}

.select-address__body tr>td:first-child {
    color: #8c8c8c;
    white-space: nowrap
}

.review-block {
    display: flex
}

.review-block~.review-block {
    margin-top: .8em;
    padding-top: .8em;
    border-top: 1px solid #e6e6e6
}

.review-block__body {
    flex: 1;
    display: flex;
    flex-wrap: wrap
}

.review-block__label {
    color: #9b9b9b;
    font-size: 1.08em;
    flex: 0 1 10em;
    padding-right: 1em;
    padding-bottom: .3em;
    white-space: nowrap
}

.review-block__content {
    flex: 0 1 auto;
    padding-right: 1em;
    width: 100%
}

.radio-wrapper {
    display: table;
    box-sizing: border-box;
    width: 100%
}

.radio-wrapper:last-child {
    margin-bottom: 0
}

.radio-wrapper:after,.radio-wrapper:before,.checkbox-wrapper:after,.checkbox-wrapper:before {
    content: "";
    display: table
}

.radio__input,.checkbox__input {
    white-space: nowrap;
    padding-right: .75em
}

.radio__input,.checkbox__input {
    display: table-cell
}

input[type="checkbox"],input[type="radio"] {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    padding: 0
}

.input-checkbox,.input-radio {
    width: 18px;
    height: 18px;
    -webkit-box-shadow: 0 0 0 0 #197bbd inset;
    box-shadow: 0 0 0 0 #197bbd inset;
    -webkit-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
    position: relative;
    cursor: pointer;
    vertical-align: -4px;
    border: 1px solid
}

.input-radio {
    border-radius: 50%
}

.input-checkbox {
    border-radius: 4px;
    position: relative
}

.input-radio:after {
    width: 4px;
    height: 4px;
    margin-left: -2px;
    margin-top: -2px;
    background-color: #fff;
    border-radius: 50%
}

.input-checkbox:after,.input-radio:after {
    content: "";
    display: block;
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: scale(.2);
    transform: scale(.2);
    -webkit-transition: all .2s ease-in-out .1s;
    transition: all .2s ease-in-out .1s;
    opacity: 0
}

.input-checkbox:checked:after,.input-radio:checked:after {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1
}

.input-checkbox:after {
    content: 'ï€Œ';
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    transform: translate(0,0);
    top: 2px;
    left: 2px;
    position: absolute;
    color: #fff
}

.main .input-checkbox,.main .input-radio {
    border-color: #d9d9d9;
    background-color: #fff
}

.content-box .input-checkbox,.content-box .input-radio {
    border-color: #d9d9d9;
    background-color: #fff
}

.input-checkbox:checked,.input-radio:checked {
    border: none;
    -webkit-box-shadow: 0 0 0 10px #337ab7 inset;
    box-shadow: 0 0 0 10px #337ab7 inset
}

.input-checkbox:checked:focus,.input-radio:checked:focus {
    outline: none
}

.radio__label,.checkbox__label {
    cursor: pointer;
    vertical-align: middle;
    display: table-cell;
    width: 100%
}

.radio__label__primary {
    cursor: inherit;
    font-family: inherit;
    vertical-align: top;
    display: table-cell;
    width: 100%
}

.radio__label-desc {
    font-size: .85em;
    display: block
}

.radio__label__accessory {
    text-align: right;
    padding-left: .75em;
    white-space: nowrap;
    display: table-cell;
    vertical-align: middle
}

.radio__label__icon {
    color: #1990c6;
    font-size: 1.5em;
    height: 100%;
    display: inline-block
}

.radio__label__icon img {
    height: 100%;
    width: auto
}

.content-box__emphasis {
    font-weight: 500;
    color: #333
}

.col-block {
    display: flex;
    flex-direction: column;
    align-items: flex-end
}

.origin-price {
    text-decoration: line-through;
    font-size: .85em
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0
}

.payment-icon {
    display: flex;
    justify-content: center;
    align-content: center;
    width: 52px;
    height: 28px;
    transition: opacity .5s cubic-bezier(.3,0,0,1);
    backface-visibility: hidden;
    -webkit-backface-visibility: hidden;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    transform: translate(0,0)
}

.payment-icon--1,.payment-icon--2 {
    background: url(//bizweb.dktcdn.net/assets/themes_support/payment_icon_onepay.png?v=1) no-repeat center center;
    background-size: contain
}

.payment-icon--6 {
    background: url(//bizweb.dktcdn.net/assets/themes_support/payment_icon_ngan_luong.png) no-repeat center center
}

.payment-icon--7 {
    background: url(//bizweb.dktcdn.net/assets/themes_support/payment_icon_bao_kim.png?18) no-repeat center center
}

.payment-icon--10 {
    background: url(//bizweb.dktcdn.net/assets/themes_support/payment_icon_paypal.png) no-repeat center center
}

.payment-icon--11 {
    background: url(//bizweb.dktcdn.net/assets/themes_support/payment_icon_moca.png) no-repeat center center
}

.payment-icon--12 {
    background: url(//bizweb.dktcdn.net/assets/themes_support/payment_icon_webmoney.png?18) no-repeat center center
}

.payment-icon--13,.payment-icon--14 {
    background: url(//bizweb.dktcdn.net/assets/themes_support/payment_icon_napas.png) no-repeat center center
}

.payment-icon--15 {
    background: url(//bizweb.dktcdn.net/assets/themes_support/payment_icon_vtc_pay.png) no-repeat center center
}

.payment-icon--16 {
    background: url(//bizweb.dktcdn.net/assets/themes_support/vnpay_icon.png) no-repeat center center;
    background-size: contain
}

.payment-icon--17 {
    background: url(//bizweb.dktcdn.net/assets/images/payment_icon_zalopay_alt.png) no-repeat center center
}

.payment-icon--18,.payment-icon--21 {
    background: url(//bizweb.dktcdn.net/assets/admin/images/logomm1.png?v=1) no-repeat center center;
    background-size: 28px 28px
}

.payment-icon--19 {
    background: url(//bizweb.dktcdn.net/assets/themes_support/vnpayqr-icon.png) no-repeat center center
}

.payment-icon--20 {
    background: url(//bizweb.dktcdn.net/assets/themes_support/alepay-icon.png) no-repeat center center;
    background-size: contain
}

.payment-icon--22 {
    background: url(//bizweb.dktcdn.net/100/055/103/themes/813720/assets/fundiin-transparent.png?1624596117620) no-repeat center center;
    background-size: 100%
}

.payment-icon--23,.payment-icon--24,.payment-icon--25 {
    background: url(//bizweb.dktcdn.net/assets/themes_support/payon.png) no-repeat center center;
    background-size: contain
}

.payment-icon--26 {
    background: url(//bizweb.dktcdn.net/web/assets/images/ocb_payment_icon_new.png) no-repeat center center;
    background-size: contain
}

.payment-icon--33 {
    background: url(//bizweb.dktcdn.net/web/assets/images/ocb_payment_icon_new.png) no-repeat center center;
    background-size: contain
}

.payment-icon--35 {
    background: url(//bizweb.dktcdn.net/web/assets/images/ocb_payment_icon_new.png) no-repeat center center;
    background-size: contain
}

.payment-icon--8::before,.payment-icon--3::before,.payment-icon--5::before,.payment-icon--4::before {
    content: "ïƒ–"
}

.payment-icon--37 {
    background: url(//bizweb.dktcdn.net/assets/themes_support/payment_icon_aftee.png) no-repeat center center;
    background-size: contain
}

.alert {
    position: relative;
    padding: .75rem 1.25rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: .25rem
}

.alert-retry {
    cursor: pointer
}

.alert--warning {
    color: #856404;
    background-color: #fff3cd;
    border-color: #ffeeba
}

.alert--danger {
    color: #721c24;
    background-color: #f8d7da;
    border-color: #f5c6cb
}

.alert--secondary {
    color: #383d41;
    background-color: #e2e3e5;
    border-color: #d6d8db
}

.alert--info {
    color: #0c5460;
    background-color: #d1ecf1;
    border-color: #bee5eb
}

.alert--loader {
    background-color: #fff;
    border-color: #cecdcd;
    padding-top: .5rem;
    padding-bottom: .5rem;
    margin-bottom: 0
}

.discount-code {
    display: flex;
    justify-content: space-between;
    align-items: center
}

.ui-tag {
    display: inline-flex;
    align-items: center;
    background-color: #dfe4e8;
    border-radius: 3px;
    color: #454f5b
}

.ui-tag--warning {
    background-color: #fff3cd;
    color: #856404;
    border-color: #ffeeba
}

.ui-tag__label {
    font-weight: 400;
    line-height: 2rem;
    display: block;
    flex: 0 1 auto;
    min-width: 0;
    width: 100%;
    padding: .1rem .4rem
}

.ui-tag__close {
    justify-content: center;
    align-items: center;
    cursor: pointer;
    text-transform: none;
    user-select: none;
    display: block;
    padding: .1rem .6rem
}

.spinner {
    display: flex;
    justify-content: center;
    align-items: center
}

.spinner-loader {
    height: 32px;
    width: 32px;
    display: none
}

.btn.spinner .spinner-loader {
    position: absolute
}

.spinner--active .spinner-loader {
    display: block
}

.spinner--active .spinner-label {
    opacity: 0
}

.modal-wrapper {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    z-index: 10;
    padding: 20px;
    box-sizing: border-box;
    background-color: rgba(0,0,0,.75);
    text-align: center
}

.modal {
    display: none;
    vertical-align: middle;
    position: relative;
    z-index: 9;
    max-width: 600px;
    box-sizing: border-box;
    width: 90%;
    background: #fff;
    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    -o-border-radius: 8px;
    -ms-border-radius: 8px;
    border-radius: 8px;
    -webkit-box-shadow: 0 0 10px #000;
    -moz-box-shadow: 0 0 10px #000;
    -o-box-shadow: 0 0 10px #000;
    -ms-box-shadow: 0 0 10px #000;
    box-shadow: 0 0 10px #000;
    text-align: left
}

.modal-header {
    border-bottom: 1px solid #e5e5e5;
    display: flex;
    justify-content: space-between
}

.modal-title {
    font-size: 1.18rem;
    font-weight: 700
}

.modal-header,.modal-body,.modal-footer {
    padding: 1.12em
}

.modal-header .close {
    font-size: 1.5rem;
    cursor: pointer;
    padding: 1rem;
    margin: -1rem -1rem -1rem auto;
    background: transparent;
    border: 0;
    -webkit-appearance: none
}

.close {
    opacity: .5;
    font-weight: 700
}

.close:hover {
    opacity: 1
}

.modal-footer {
    display: flex;
    justify-content: flex-end
}

.qr {
    display: flex;
    justify-content: space-evenly;
    flex-wrap: wrap
}

@media(min-width: 1000px) {
    .qr {
        flex-wrap:nowrap
    }
}

.qrcode {
    padding: 0 1em;
    text-align: center
}

.qrcode__order-amount {
    font-size: 1.5em
}

.qrcode__image {
    width: 240px;
    height: 240px
}

.qr__guide {
    padding: 0 1em
}

.inline-icon {
    width: 32px;
    display: inline-block;
    vertical-align: middle;
    margin: 0 3px
}

.select2-container .select2-selection--single.select2-phone-region {
    height: 44px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-top-left-radius: 0;
    border-left: 0;
    border-bottom-left-radius: 0
}

.select2-dropdown.select2-phone-region--dropdown.select2-dropdown--below {
    left: auto;
    right: -56px;
    position: absolute !important;
    white-space: nowrap
}

.field__input-phone-region-wrapper .select2-container {
    width: 4em
}

.select2-container .select2-phone-region .select2-selection__arrow {
    top: .5em
}

.select2-selection {
    border-radius: 4px
}

.select2-results__options {
    color: #000
}

.select2-selection:focus,.select2-search__field:focus {
    outline: none;
    border-color: #66afe9;
    box-shadow: 0 0 0 1px #66afe9
}

.select2-container--default .select2-selection--single {
    border: 1px #d9d9d9 solid
}

.field__input-wrapper--select2 .select2-container .select2-selection--single {
    height: 3em;
    padding-top: 1em
}

.field__input-wrapper--select2 .select2-container .select2-selection--single .select2-selection__rendered {
    padding-left: .8em
}

.field__input-wrapper--select2 .select2-container--default .select2-selection--single .select2-selection__arrow {
    border-left: 1px rgba(179,179,179,.5) solid;
    width: 2em;
    top: .5em
}

.field--error .field__input-wrapper--select2 .select2-container--default .select2-selection--single {
    border-color: #c23527;
    box-shadow: 0 0 0 1px #c23527
}

.term-preview {
    white-space: pre-wrap;
    word-break: break-word
}

hr {
    width: 100%;
    border-top: .5px solid #cecdcd
}

.p-desc {
    margin: 1.5rem 0
}

.p-desc p {
    margin: 0
}

.p-desc.p-desc--fail {
    margin: 1.3rem auto
}

.p-desc.p-desc--fail>p+p {
    margin-top: .5rem
}

.text-icon-group {
    cursor: pointer;
    display: inline-block;
    margin-left: 2rem;
    margin-right: 2rem
}

.text-icon-group--large {
    font-size: 1.5rem
}

.text-icon-group--large .fa {
    font-size: 1.8rem
}

.icon-failure {
    margin: 0 0 1.3rem 0
}

@media(min-width: 1000px) {
    .icon-failure {
        margin-top:1.3rem
    }
}

.icon-failure svg {
    width: 40px;
    height: 40px
}

.section__title.section__title--fail {
    font-size: 1.25rem;
    line-height: 1.63rem;
    text-transform: uppercase
}

.checkout__choice-separator {
    display: flex;
    flex-wrap: nowrap;
    justify-content: center;
    align-items: center;
    margin: 1rem auto
}

.checkout__choice--wrapper {
    margin: 0 auto;
    width: 320px
}

.checkout__choice--wrapper .btn {
    width: 100%
}

@media(max-width: 320px) {
    .checkout__choice--wrapper {
        width:280px
    }
}

.checkout__choice-separator::after,.checkout__choice-separator::before {
    content: '';
    flex: 1 1 auto;
    border-bottom: solid 1px #e8eaeb
}

.checkout__choice-separator--content {
    flex: 0 1 auto;
    margin: 0 .5rem
}

.btn.btn--light {
    background-color: #fff;
    color: #737373;
    border: 2px solid #d3d5d7
}

.btn.btn--light:hover {
    background-color: #f8f9fa;
    color: #737373;
    border: 2px solid #c3c7cb
}

.btn.btn--light:focus {
    color: #737373
}

.error-message,.thankyou-page .main__content .error-message {
    color: #c23527
}

@media(min-width: 1000px) {
    .thankyou-message-container {
        max-width:75%
    }
}

td.printable-only {
    display: none
}

@media print {
    .unprintable {
        display: none
    }

    .thankyou-message-container {
        max-width: 100%
    }

    td.printable-only {
        display: table-cell
    }

    .order-summary--is-collapsed .order-summary--collapse-element {
        visibility: visible;
        overflow: visible;
        height: 100%
    }

    .col--md-two {
        width: 50%;
        padding-top: 0
    }

    .section__content--bordered {
        margin: 0
    }

    a,.radio__label__icon,.payment-due__price,.spinner--active,.ui-tag__label,.ui-tag__close {
        color: #000 !important
    }
}

.redacted-line {
    height: 1em;
    background: #e5e5e5;
    width: 100%
}

.redacted-line--60 {
    width: 60%
}

.redacted-line--65 {
    width: 65%
}

.redacted-line--70 {
    width: 70%
}

.redacted-line--90 {
    width: 90%
}

.thankyou-page body {
    background-color: #e6e8ea;
    color: #46484a
}

.thankyou-page .order-summary {
    background-color: #fafafa
}

.w-full {
    width: 100%
}

.flex {
    display: flex
}

.flex-wrap {
    flex-wrap: wrap
}

.modal.payon_modal,.modal.vnpay_qr {
    max-width: 728px
}

.modal.payon_modal.payon_inst {
    max-width: 900px
}

.payon_modal .modal-title,.vnpay_qr .modal-title {
    gap: 14px;
    align-items: center
}

.payon_modal .modal-title svg {
    flex-shrink: 0;
    height: 16px;
    width: 55px
}

.vnpay_qr .modal-title img {
    flex-shrink: 0;
    height: 14px
}

.ocb_modal .btn-change-method,.payon_modal .btn-change-method,.vnpay_qr .btn-change-method {
    font-size: 14px;
    font-weight: normal;
    position: absolute;
    right: 20px;
    color: #08f;
    line-height: 22px;
    cursor: pointer
}

.ocb_modal .btn-change-method:hover,.payon_modal .btn-change-method:hover,.vnpay_qr .btn-change-method:hover {
    text-decoration: underline
}

.ocb_modal .btn-change-method:disabled,.payon_modal .btn-change-method:disabled,.vnpay_qr .btn-change-method:disabled {
    opacity: .5;
    cursor: default
}

.ocb_modal a,.payon_modal a,.vnpay_qr a {
    color: #08f
}

.ocb_modal .title-step,.payon_modal .title-step,.vnpay_qr .title-step {
    gap: 8px;
    align-items: flex-start;
    margin-bottom: 24px
}

.vnpay_qr .title-step {
    margin-bottom: 12px
}

.payon_modal.payon_inst .title-step {
    margin-bottom: 20px
}

.vnpay_qr .vnpay_qr__title-bank {
    margin-top: 20px
}

.payon_modal .step-payon,.vnpay_qr .step-vnpay {
    background: #f2f9ff;
    color: #08f;
    padding: 6px 5px;
    white-space: nowrap
}

.payon_modal .step-payon-des,.vnpay_qr .step-vnpay-des {
    align-self: center;
    color: #212b35;
    line-height: 28px;
    font-size: 16px;
    font-weight: bold
}

.vnpay_qr .step-vnpay-des {
    display: flex;
    align-items: center;
    gap: 10px
}

.payon_modal .bank-list,.payon_modal .card-list {
    gap: 16px;
    max-height: 264px;
    overflow: auto;
    margin-bottom: 26px
}

.payon_modal.payon_inst .bank-list,.payon_modal.payon_inst .card-list {
    margin-bottom: 20px
}

.payon_modal .bank-list.has-choose-bank {
    max-height: 125px
}

.payon_modal .bank-list::-webkit-scrollbar,.payon_modal .card-list::-webkit-scrollbar,.vnpay_qr .bank-list::-webkit-scrollbar {
    width: 6px;
    background-color: #e8eaeb
}

.payon_modal .bank-list::-webkit-scrollbar-track,.payon_modal .card-list::-webkit-scrollbar-track,.vnpay_qr .bank-list::-webkit-scrollbar-track {
    box-shadow: inset 0 0 6px rgba(0,0,0,0);
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0)
}

.payon_modal .bank-list::-webkit-scrollbar-thumb,.payon_modal .card-list::-webkit-scrollbar-thumb,.vnpay_qr .bank-list::-webkit-scrollbar-thumb {
    min-height: 24px;
    border-radius: 8px;
    background-color: #cbccce
}

.payon_modal .bank-list .bank-payon {
    width: 100px;
    box-sizing: border-box;
    height: 54px;
    cursor: pointer;
    border: 1px solid #d3d5d7;
    position: relative;
    border-radius: 5px
}

.payon_modal.payon_inst .bank-list {
    max-height: 364px
}

.payon_modal.payon_inst .bank-list.has-choose-bank {
    max-height: 136px
}

.payon_modal.payon_inst .bank-list .bank-payon,.payon_modal.payon_inst .card-list .bank-payon {
    width: 158px;
    height: 60px;
    box-sizing: border-box;
    cursor: pointer;
    border: 1px solid #d3d5d7;
    position: relative;
    border-radius: 5px
}

.payon_modal .bank-list .bank-payon img,.payon_modal .card-list .bank-payon img {
    max-width: calc(100% - 8px);
    max-height: 100%;
    width: auto;
    height: auto;
    position: absolute;
    top: 4px;
    bottom: 4px;
    left: 4px;
    right: 4px;
    margin: auto
}

.payon_modal .bank-list .bank-payon.bank-payon-checked,.payon_modal .card-list .bank-payon.bank-payon-checked {
    border: 1px solid #08f;
    position: relative
}

.payon_modal .bank-list .bank-payon svg,.payon_modal .card-list .bank-payon svg {
    color: #08f;
    right: -3px;
    bottom: -1px;
    margin: 0;
    display: none;
    position: absolute;
    fill: currentColor;
    width: 20px;
    height: 20px;
    font-size: 1.5rem;
    transition: fill 200ms cubic-bezier(.4,0,.2,1) 0ms;
    flex-shrink: 0;
    user-select: none
}

.payon_modal .bank-list .bank-payon.bank-payon-checked svg,.payon_modal .card-list .bank-payon.bank-payon-checked svg {
    display: block
}

.payon_modal .bank-list .spinner {
    height: 264px;
    width: 100%;
    flex-direction: column;
    gap: 10px
}

.payon_modal .warning {
    gap: 24px;
    font-size: 14px;
    color: #212b35
}

.payon_modal .warning svg {
    width: 24px;
    height: 24px;
    fill: #ff7070;
    flex-shrink: 0
}

.payon_modal.payon_inst .warning {
    gap: 8px;
    color: #747c87;
    margin-bottom: 20px
}

.payon_modal .actions {
    margin-top: 16px;
    justify-content: flex-end
}

.payon_modal .actions .btn-create-qr {
    gap: 6px;
    align-items: center;
    height: 45px;
    padding: 0 1.7em
}

.payon_modal .actions .btn-create-qr svg {
    width: 20px;
    height: 20px
}

.payon_modal .actions .btn-create-qr:disabled {
    opacity: .5
}

.payon_qr__image,.vnpay_qr .qr {
    margin-top: 10px;
    padding-left: 0;
    padding-right: 0
}

.payon_modal .qr-code,.payon_modal .guide,.vnpay_qr .qrcode,.vnpay_qr .qr__guide {
    width: 50%;
    flex-shrink: 0;
    box-sizing: border-box;
    padding: 0 1em
}

.payon_modal .qr-code {
    padding: 0
}

.payon_modal .qr-code .qrcode__footer {
    display: none
}

.payon_modal .qr-code .qrcode__image,.vnpay_qr .qrcode .qrcode__image {
    max-width: 100%;
    height: auto
}

.payon_modal .qrcode__header,.vnpay_qr .qrcode__header {
    margin-top: 20px;
    margin-bottom: 10px;
    font-size: 14px;
    line-height: 28px;
    color: #46515f
}

.payon_modal .guide .actions {
    text-align: center;
    display: none
}

.payon_modal .qrcode__header .qrcode__order-amount,.vnpay_qr .qrcode__header .qrcode__order-amount {
    font-size: 20px;
    color: #212b35;
    font-weight: 600
}

.payon_modal .qrcode__footer,.vnpay_qr .qrcode__footer {
    background: #fff3da;
    border-radius: 5px;
    height: 72px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-top: 60px
}

.vnpay_qr .qrcode__footer {
    width: 235px;
    max-width: 100%;
    margin: 0 auto
}

.vnpay_qr .qrcode__footer {
    margin-bottom: 20px;
    margin-top: 20px
}

.payon_modal .qrcode__footer span,.vnpay_qr .qrcode__footer span {
    font-size: 14px;
    line-height: 28px
}

.payon_modal .qrcode__footer .pollMinutes,.payon_modal .qrcode__footer .pollSeconds,.vnpay_qr .qrcode__footer .pollMinutes,.vnpay_qr .qrcode__footer .pollSeconds {
    background: #ffae06;
    border-radius: 5px;
    width: auto;
    padding: 0 8px;
    line-height: 24px;
    height: 24px;
    color: #fff
}

.payon_modal .qrcode__footer .poll-colon,.vnpay_qr .qrcode__footer .poll-colon {
    font-weight: bold;
    margin: 0 10px;
    line-height: 24px
}

.payon_modal .payon-inst__bank .bank-list-select {
    display: none
}

.payon_modal .payon-inst__fee .fee-mobile {
    display: none
}

.payon_modal .total-order {
    background: #f2f9ff;
    border: 1px dashed #66b8ff;
    border-radius: 5px;
    padding: 10px 20px;
    color: #0f1824;
    font-size: 16px;
    line-height: 26px;
    margin-bottom: 20px
}

.payon_modal .fee-desktop {
    overflow: auto
}

.payon_modal .fee-desktop table {
    border: 1px solid #d3d5d7;
    font-size: 14px;
    line-height: 20px;
    color: #0f1824
}

.payon_modal .fee-desktop table thead {
    background: #f4f4f5
}

.payon_modal .fee-desktop table thead th {
    padding: 12px 16px;
    text-align: right;
    font-weight: bold;
    border-bottom: 1px solid #d3d5d7;
    white-space: nowrap
}

.payon_modal .fee-desktop table thead th:first-child {
    text-align: left
}

.payon_modal .fee-desktop table tbody td {
    padding: 12px 16px;
    border-bottom: 1px solid #d3d5d7;
    text-align: right;
    vertical-align: top
}

.payon_modal .fee-desktop table tbody td span {
    display: block
}

.payon_modal .fee-desktop table tbody td .red {
    color: #ff4d4d
}

.payon_modal .fee-desktop table tbody td:first-child {
    text-align: left
}

.payon_modal .list-cycle-mobile {
    display: none
}

.payon_modal .btn-choose-cycle {
    height: 36px;
    border: 1px solid #08f;
    border-radius: 3px;
    background: #fff;
    color: #08f;
    margin-top: 10px;
    transition: all .2s ease-in-out;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
    padding: 0 10px;
    float: right
}

.payon_modal .btn-choose-cycle svg {
    display: none
}

.payon_modal .btn-choose-cycle:hover {
    background: #08f;
    color: #fff
}

.payon_modal .btn-choose-cycle.is-submit svg {
    width: 16px;
    height: 16px;
    display: block
}

.payon_modal .btn-choose-cycle:disabled {
    opacity: .6;
    cursor: default
}

.payon_modal.payon_inst .actions {
    display: none
}

.vnpay_qr .bank-list {
    flex-wrap: wrap;
    align-items: center;
    gap: 20px 12px;
    max-height: 170px;
    overflow: auto
}

.vnpay_qr .bank-list img {
    width: 70px
}

.vnpay_qr .actions {
    display: none
}

@media(max-width: 767px) {
    .payon_modal .payon-inst__bank .bank-list {
        display:none
    }

    .payon_modal .payon-inst__fee .fee-desktop {
        display: none
    }

    .payon_modal .payon-inst__bank .bank-list-select {
        display: block
    }

    .payon_modal .payon-inst__fee .fee-mobile {
        display: block
    }

    .payon_modal.payon_inst .title-step {
        margin-bottom: 10px
    }

    .payon_modal.payon_inst .bank-list-select {
        height: 36px;
        padding: 6px 12px;
        background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyMCAyMCIgZmlsbD0iI0EzQThBRiI+PHBhdGggZD0iTTYuMjggOS4yOGwzLjM2NiAzLjM2NmMuMTk2LjE5Ni41MTIuMTk2LjcwOCAwTDEzLjcyIDkuMjhjLjI5My0uMjkzLjI5My0uNzY3IDAtMS4wNi0uMTQtLjE0LS4zMzItLjIyLS41My0uMjJINi44MWMtLjQxNCAwLS43NS4zMzYtLjc1Ljc1IDAgLjIuMDguMzkuMjIuNTN6Ij48L3BhdGg+PC9zdmc+");
        background-repeat: no-repeat;
        background-size: 25px 25px;
        background-position: right 5px center;
        margin-bottom: 20px
    }

    .payon_modal .payon-inst__card .card-list .bank-payon {
        max-width: calc(33% - 6px);
        height: 50px
    }

    .payon_modal .list-cycle-mobile {
        display: flex;
        gap: 10px;
        margin-bottom: 15px
    }

    .payon_modal .list-cycle-mobile .cycle-payon {
        width: 88px;
        height: 36px;
        border: 1px solid #d3d5d7;
        border-radius: 5px;
        line-height: 36px;
        text-align: center;
        flex-shrink: 0
    }

    .payon_modal .list-cycle-mobile .cycle-payon.cycle-payon-checked {
        border-color: #08f
    }

    .payon_modal .fee-mobile .fee-item__row {
        border: 1px solid #d3d5d7;
        border-top: none;
        padding: 12px 16px;
        color: #46515f;
        display: flex;
        align-items: center;
        justify-content: space-between
    }

    .payon_modal .fee-mobile .fee-item__row:first-child {
        border-top: 1px solid #d3d5d7
    }

    .payon_modal .fee-mobile .fee-item__row.fee-item__title {
        background: #f4f4f5;
        color: #0f1824;
        font-weight: 600
    }

    .payon_modal .fee-mobile .fee-item__row .red {
        color: #ff4d4d
    }

    .payon_modal .fee-mobile .fee-item__row span {
        white-space: nowrap
    }

    .payon_modal .fee-mobile .btn-choose-cycle {
        width: 100%;
        margin-bottom: 20px
    }

    .payon_modal.payon_inst .actions {
        display: block;
        text-align: center;
        margin-bottom: 10px
    }

    .payon_modal .list-cycle-mobile {
        display: flex;
        flex-wrap: wrap
    }
}

@media(max-width: 700px) {
    .payon_modal,.vnpay_qr {
        width:100%
    }

    .payon_modal .modal-header,.vnpay_qr .modal-header {
        padding: 13px 8px
    }

    .payon_modal .modal-title,.vnpay_qr .modal-title {
        font-size: 15px;
        font-weight: 600
    }

    .payon_modal .modal-title .btn-change-method,.vnpay_qr .btn-change-method {
        display: none
    }

    .payon_modal .modal-body,.vnpay_qr .modal-body {
        padding: 10px 0
    }

    .payon_modal .payon-qr__bank {
        padding: 0 8px
    }

    .payon_modal .step-payon-des,.vnpay_qr .step-vnpay-des {
        font-size: 14px;
        line-height: 20px
    }

    .payon_modal .bank-list,.payon_modal .card-list {
        gap: 6px;
        margin-bottom: 10px;
        max-height: initial
    }

    .payon_modal .bank-list .bank-payon,.payon_modal .card-list .bank-payon {
        width: calc(33.3333333333% - 4px)
    }

    .payon_modal .actions .btn-create-qr {
        height: 36px;
        padding: 0 10px
    }

    .payon_modal .warning {
        display: none
    }

    .payon_qr__image {
        flex-direction: column;
        margin-top: 0
    }

    .payon_modal .qr-code,.payon_modal .guide,.vnpay_qr .qrcode,.vnpay_qr .qr__guide {
        width: 100%
    }

    .payon_modal .guide .qrcode__footer {
        display: none
    }

    .payon_modal .qr-code .qrcode__footer {
        display: flex;
        margin-top: 10px;
        margin-bottom: 24px
    }

    .payon_modal .qr-code .qrcode__header {
        display: flex;
        align-items: flex-end;
        line-height: 22px;
        gap: 8px;
        margin-top: 0;
        justify-content: center
    }

    .payon_modal .qrcode__header .qrcode__order-amount {
        line-height: 24px
    }

    .payon_modal .guide .actions {
        display: block;
        margin-top: 0;
        margin-bottom: 20px
    }

    .vnpay_qr .actions {
        display: block;
        text-align: center
    }

    .payon_modal .total-order {
        padding: 8px;
        font-size: 14px;
        line-height: 18px
    }

    .payon_modal.payon_inst .modal-body {
        padding: 10px
    }

    .payon_modal .total-order strong {
        display: block
    }
}

.ocb_modal .qrcode__header_title {
    color: #46515f;
    font-weight: 400;
    font-size: 13px;
    margin-top: 14px;
    margin-bottom: 30px
}

.ocb_modal .border__payment_casso_left {
    border: 8px solid #cce7ff;
    border-radius: 10px
}

.ocb_modal .border__payment_casso_right {
    margin-left: 20px
}

.ocb_modal .qrcode {
    padding: 0 3em;
    padding-bottom: 15px
}

.ocb_modal .border__payment_casso_right_title {
    color: #212b35;
    font-weight: bold;
    font-size: 16px;
    margin-bottom: 18px;
    margin-top: 15px
}

.ocb_modal .data__in_table__cassso {
    color: #0f1824;
    font-size: 14px;
    font-weight: bold
}

.ocb_modal .tbl_line_account {
    margin-top: 15px
}

.ocb_modal #temp__casso {
    padding: 3px 8px;
    border: 2px solid #06dc52;
    color: #06dc52;
    border-radius: 3px;
    text-align: left;
    margin-bottom: 13px;
    display: inline-block;
    margin-top: 12px
}

.ocb_modal .tbl_line_amount {
    margin-top: 10px;
    margin-bottom: 35px
}

.ocb_modal .tbl_line_amount_content {
    font-size: 28px
}

.modal.ocb_modal {
    max-width: 777px
}

.modal.ocb_modal {
    max-width: 777px
}

.ocb_modal .noti_ocb_content {
    background: #fff3da;
    border: 1px solid #ffce6a;
    border-radius: 5px;
    padding: 12px;
    color: #212b35;
    font-size: 14px
}

.ocb_modal .box-bank {
    margin-bottom: 5px;
    margin-top: -15px;
    position: relative
}

.ocb_modal .qrcode__main {
    position: relative
}

.ocb_modal .vietqr-icon {
    position: absolute;
    top: -20px;
    left: 43px
}

.ocb_modal .ocb-icon {
    position: absolute;
    top: 39.5%;
    left: 41.5%
}

@media only screen and (max-width: 414px) {
    .ocb_modal .modal-title span {
        width:50%
    }

    .ocb_modal .qrcode {
        padding: 0 1em
    }

    .ocb_modal .tbl_line_amount_content {
        font-size: 20px
    }
}

.ocb_modal .box-bank-mb {
    margin-bottom: 5px;
    margin-top: 2px;
    position: relative
}

.ocb_modal .vietqr-icon-mb {
    position: absolute;
    top: -40px;
    left: 43px
}

.ocb_modal .qrcode_mb__header_title {
    color: #46515f;
    font-weight: 400;
    font-size: 13px;
    margin-top: 14px;
    margin-bottom: 45px
}











































</style>
<!-- End checkout custom css -->

<script src="//bizweb.dktcdn.net/assets/themes_support/libphonenumber-v3.2.30.min.js?1697597694844"></script>

	<script src="/dist/js/checkout.vendor.min.js?v=11006c9"></script>


	
		<script src="/dist/js/checkout.min.js?v=a0ee933"></script>
	


<script>
	var Bizweb = Bizweb || {};
	Bizweb.id = '429689';
	Bizweb.store = 'pocomart.mysapo.net';
	
	Bizweb.template = 'thankyou';
	
	Bizweb.first_time_accessed = 'true';
	
	//<![CDATA[
	Bizweb.Checkout = Bizweb.checkout = {"created_on":"2024-01-06T07:40:03","customer_id":14960367,"customer_first_name":"bndsdfnbadf","customer_last_name":"fgntgn","customer_phone":"+84378332904","email":"phutai5704@gmail.com","order_id":12852436,"phone":"+84378332904","token":"f2498e529b4c466892fc0b74a355bb3b","billing_address":{"address1":"dfsbsdbfds","address2":null,"city":"Hà Nam","company":null,"country":"Vietnam","country_code":"VN","province_code":"25","province":"Hà Nam","district_code":"276","district":"Huyện Bình Lục","ward":"Xã Đồng Du","ward_code":"4612","first_name":"phutai","last_name":"nguyen","phone":"+84378332904","email":null,"zip":null},"shipping_address":{"address1":"dfsbsdbfds","address2":null,"city":"Hà Nam","company":null,"country":"Vietnam","country_code":"VN","province_code":"25","province":"Hà Nam","district_code":"276","district":"Huyện Bình Lục","ward":"Xã Đồng Du","ward_code":"4612","first_name":"phutai","last_name":"nguyen","phone":"+84378332904","email":null,"zip":null},"shipping_price":40000.0000,"subtotal_price":116790000.0000,"total_price":116830000.0000,"total_line_items_price":116790000.0000,"order_discounts":[],"requires_shipping":true,"line_items":[{"grams":0,"quantity":4,"price":29000000.0000,"price_final":29000000.0000,"price_original":29000000.0000,"total_discount":0.0000,"title":"Samsung Galaxy Note 21","taxable":false,"product_name":"Samsung Galaxy Note 21","product_id":21989403,"variant_id":47262129,"variant_title":"Default Title","sku":"ssultra-6x","vendor":"Samsung","requires_shipping":true},{"grams":0,"quantity":1,"price":790000.0000,"price_final":790000.0000,"price_original":790000.0000,"total_discount":0.0000,"title":"Kappa giày thể thao Nam/Nữ 311685W A0F","taxable":false,"product_name":"Kappa giày thể thao Nam/Nữ 311685W A0F","product_id":21992408,"variant_id":47267905,"variant_title":"38","sku":null,"vendor":"Kappa","requires_shipping":true}]}
	//]]>
	
</script>

<script>
	window.BizwebAnalytics = window.BizwebAnalytics || {};
	window.BizwebAnalytics.meta = window.BizwebAnalytics.meta || {};
	window.BizwebAnalytics.meta.currency = 'VND';
	window.BizwebAnalytics.tracking_url = '/s';
	var meta = {};
	
	
	meta.customer = { "id": 14960367, "first_name": "bndsdfnbadf", "last_name": "fgntgn", "phone": "84378332904", "email": "phutai5704@gmail.com" };
	
	for (var attr in meta) {
		window.BizwebAnalytics.meta[attr] = meta[attr];
	}
</script>

	
		<script src="/dist/js/stats.min.js?v=8177d93"></script>
	

</head>

<body data-no-turbolink>

	<header class="banner">
		<div class="wrap">
			<div class="logo logo--left">
	
		<h1 class="shop__name">
			<a href="/">pocomart</a>
		</h1>
	
</div>
		</div>
	</header>
	<div class="content">
		<form>
			<div class="wrap wrap--mobile-fluid">
				<main class="main main--nosidebar">
					<header class="main__header">
						<div class="logo logo--left">
	
		<h1 class="shop__name">
			<a href="/">pocomart</a>
		</h1>
	
</div>
					</header>
					<div class="main__content">
						<article class="row">
							<div class="col col--primary">
								<section class="section section--icon-heading">
									<div class="section__icon unprintable">
										<svg xmlns="http://www.w3.org/2000/svg" width="72px" height="72px">
											<g fill="none" stroke="#8EC343" stroke-width="2">
												<circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
												<path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
											</g>
										</svg>
									</div>
									<div class="thankyou-message-container">
										<h2 class="section__title">Cảm ơn bạn đã đặt hàng</h2>
										
										<p class="section__text">
											Một email xác nhận đã được gửi tới {{$cus -> email}}. <br/>
											Xin vui lòng kiểm tra email của bạn
										</p>
										
										
									</div>
								</section>
							</div>
							<div class="col col--secondary">
								<aside class="order-summary order-summary--bordered order-summary--is-collapsed" id="order-summary">
									<div class="order-summary__header">
										<div class="order-summary__title">
											Đơn hàng #1070
											<span class="unprintable"></span>
										</div>
										<div class="order-summary__action hide-on-desktop unprintable">
											<a data-toggle="#order-summary" data-toggle-class="order-summary--is-collapsed" class="expandable">
												Xem chi tiết
											</a>
										</div>
									</div>
									<div class="order-summary__sections">
										<div class="order-summary__section order-summary__section--product-list order-summary__section--is-scrollable order-summary--collapse-element">
											<table class="product-table">
												<tbody>
													@foreach($detail as $t)
													<tr class="product">
														<td class="product__image">
															<div class="product-thumbnail">
																<div class="product-thumbnail__wrapper">
																	<img src="/uploads/product/{{$t->pro->image}}" alt="" class="product-thumbnail__image" />
																</div>
																<span class="product-thumbnail__quantity unprintable">{{$t ->quantity}}</span>
															</div>
														</td>
														<th class="product__description">
															<span class="product__description__name">{{$t ->pro-> name}}</span>
															
															
														</th>
														
														<td class="product__price">
															
                                                            {{number_format($t ->price)}}đ
															
														</td>
													</tr>
													@endforeach 
													
													
												</tbody>
											</table>
										</div>
										<div class="order-summary__section">
											<table class="total-line-table">
												<tbody class="total-line-table__tbody">
													
													
													<tr class="total-line total-line--subtotal">
														<th class="total-line__name">Tạm tính</th>
														<td class="total-line__price">{{number_format($price-40000)}}đ</td>
													</tr>
													
													<tr class="total-line total-line--shipping-fee">
														<th class="total-line__name">Phí vận chuyển</th>
														<td class="total-line__price">
															
															40.000₫
															
														</td>
													</tr>
													
												</tbody>
											</table>
										</div>
										<div class="order-summary__section">
											<table class="total-line-table">
												<tbody class="total-line-table__tbody">
													<tr class="total-line payment-due">
														<th class="total-line__name">
															<span class="payment-due__label-total">Tổng cộng</span>
														</th>
														<td class="total-line__price">
															<span class="payment-due__price">{{number_format($price)}}đ</span>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</aside>
							</div>
							<div class="col col--primary">
								<section class="section">
									<div class="section__content section__content--bordered">
										
										<div class="row">
											
											<div class="col col--md-two">
												<h2>Thông tin mua hàng</h2>
												<p>{{$cus -> name}}</p>
												
												<p>{{$cus -> email}}</p>
												
												
												
												
											</div>
											
											<div class="col col--md-two">
                                                
												<h2>Địa chỉ nhận hàng</h2>
                                                @foreach($ad as $d)
												<p>{{$d -> name}}</p>
												
												<p>{{$d -> address}}</p>
												
												
												
												
												
												
												<p>{{$d -> phone}}</p>
												@endforeach
											</div>
										</div>
										<div class="row">
											<div class="col col--md-two">
												<h2>Phương thức thanh toán</h2>
												<p>Thanh toán khi giao hàng (COD)</p>
											</div>
											<div class="col col--md-two">
												<h2>Phương thức vận chuyển</h2>
												<p>Giao hàng tận nơi</p>
											</div>
										</div>
										
									</div>
								</section>
								<section class="section unprintable">
									<div class="field__input-btn-wrapper field__input-btn-wrapper--floating">
										<a href="/" class="btn btn--large">Tiếp tục mua hàng</a>
										<span class="text-icon-group text-icon-group--large icon-print" onclick="window.print()">
											<i class="fa fa-print"></i>
											<span>In </span>
										</span>
									</div>
								</section>
							</div>
						</article>
					</div>
					
				</main>
			</div>
		</form>
	</div>
</body>
</html>