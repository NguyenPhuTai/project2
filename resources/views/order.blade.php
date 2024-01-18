

<!DOCTYPE html>
<html class="floating-labels">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<meta name="description" content="pocomart - Thanh toán đơn hàng" />
	<title>pocomart - Thanh toán đơn hàng</title>
	
	
	
	
<link rel="shortcut icon" href="//bizweb.dktcdn.net/assets/sapo_favicon.png" type="image/x-icon" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css" />

	<link rel="stylesheet" href="https://dist/css/checkout.vendor.min.css?v=4fcd86c">


	<link rel="stylesheet" href="https://dist/css/checkout.min.css?v=ce7712f">

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
.select2-container {
    box-sizing: border-box;
    display: inline-block;
    margin: 0;
    position: relative;
    vertical-align: middle
}

.select2-container .select2-selection--single {
    box-sizing: border-box;
    cursor: pointer;
    display: block;
    height: 28px;
    user-select: none;
    -webkit-user-select: none
}

.select2-container .select2-selection--single .select2-selection__rendered {
    display: block;
    padding-left: 8px;
    padding-right: 20px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap
}

.select2-container .select2-selection--single .select2-selection__clear {
    background-color: transparent;
    border: none;
    font-size: 1em
}

.select2-container[dir="rtl"] .select2-selection--single .select2-selection__rendered {
    padding-right: 8px;
    padding-left: 20px
}

.select2-container .select2-selection--multiple {
    box-sizing: border-box;
    cursor: pointer;
    display: block;
    min-height: 32px;
    user-select: none;
    -webkit-user-select: none
}

.select2-container .select2-selection--multiple .select2-selection__rendered {
    display: inline;
    list-style: none;
    padding: 0
}

.select2-container .select2-selection--multiple .select2-selection__clear {
    background-color: transparent;
    border: none;
    font-size: 1em
}

.select2-container .select2-search--inline .select2-search__field {
    box-sizing: border-box;
    border: none;
    font-size: 100%;
    margin-top: 5px;
    margin-left: 5px;
    padding: 0
}

.select2-container .select2-search--inline .select2-search__field::-webkit-search-cancel-button {
    -webkit-appearance: none
}

.select2-dropdown {
    background-color: #fff;
    border: 1px solid #aaa;
    border-radius: 4px;
    box-sizing: border-box;
    display: block;
    position: absolute;
    left: -100000px;
    width: 100%;
    z-index: 1051
}

.select2-results {
    display: block
}

.select2-results__options {
    list-style: none;
    margin: 0;
    padding: 0
}

.select2-results__option {
    padding: 6px;
    user-select: none;
    -webkit-user-select: none
}

.select2-results__option--selectable {
    cursor: pointer
}

.select2-container--open .select2-dropdown {
    left: 0
}

.select2-container--open .select2-dropdown--above {
    border-bottom: none;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0
}

.select2-container--open .select2-dropdown--below {
    border-top: none;
    border-top-left-radius: 0;
    border-top-right-radius: 0
}

.select2-search--dropdown {
    display: block;
    padding: 4px
}

.select2-search--dropdown .select2-search__field {
    padding: 4px;
    width: 100%;
    box-sizing: border-box
}

.select2-search--dropdown .select2-search__field::-webkit-search-cancel-button {
    -webkit-appearance: none
}

.select2-search--dropdown.select2-search--hide {
    display: none
}

.select2-close-mask {
    border: 0;
    margin: 0;
    padding: 0;
    display: block;
    position: fixed;
    left: 0;
    top: 0;
    min-height: 100%;
    min-width: 100%;
    height: auto;
    width: auto;
    opacity: 0;
    z-index: 99;
    background-color: #fff;
    filter: alpha(opacity=0)
}

.select2-hidden-accessible {
    border: 0 !important;
    clip: rect(0 0 0 0) !important;
    -webkit-clip-path: inset(50%) !important;
    clip-path: inset(50%) !important;
    height: 1px !important;
    overflow: hidden !important;
    padding: 0 !important;
    position: absolute !important;
    width: 1px !important;
    white-space: nowrap !important
}

.select2-container--default .select2-selection--single {
    background-color: #fff;
    border: 1px solid #aaa;
    border-radius: 4px
}

.select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #444;
    line-height: 28px
}

.select2-container--default .select2-selection--single .select2-selection__clear {
    cursor: pointer;
    float: right;
    font-weight: bold;
    height: 26px;
    margin-right: 20px;
    padding-right: 0
}

.select2-container--default .select2-selection--single .select2-selection__placeholder {
    color: #999
}

.select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 26px;
    position: absolute;
    top: 1px;
    right: 1px;
    width: 20px
}

.select2-container--default .select2-selection--single .select2-selection__arrow b {
    border-color: #888 transparent transparent transparent;
    border-style: solid;
    border-width: 5px 4px 0 4px;
    height: 0;
    left: 50%;
    margin-left: -4px;
    margin-top: -2px;
    position: absolute;
    top: 50%;
    width: 0
}

.select2-container--default[dir="rtl"] .select2-selection--single .select2-selection__clear {
    float: left
}

.select2-container--default[dir="rtl"] .select2-selection--single .select2-selection__arrow {
    left: 1px;
    right: auto
}

.select2-container--default.select2-container--disabled .select2-selection--single {
    background-color: #eee;
    cursor: default
}

.select2-container--default.select2-container--disabled .select2-selection--single .select2-selection__clear {
    display: none
}

.select2-container--default.select2-container--open .select2-selection--single .select2-selection__arrow b {
    border-color: transparent transparent #888 transparent;
    border-width: 0 4px 5px 4px
}

.select2-container--default .select2-selection--multiple {
    background-color: #fff;
    border: 1px solid #aaa;
    border-radius: 4px;
    cursor: text;
    padding-bottom: 5px;
    padding-right: 5px
}

.select2-container--default .select2-selection--multiple .select2-selection__clear {
    cursor: pointer;
    float: right;
    font-weight: bold;
    height: 20px;
    margin-right: 10px;
    margin-top: 5px;
    padding: 1px
}

.select2-container--default .select2-selection--multiple .select2-selection__choice {
    background-color: #e4e4e4;
    border: 1px solid #aaa;
    border-radius: 4px;
    display: inline-block;
    margin-left: 5px;
    margin-top: 5px;
    padding: 0
}

.select2-container--default .select2-selection--multiple .select2-selection__choice__display {
    cursor: default;
    padding-left: 2px;
    padding-right: 5px
}

.select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
    background-color: transparent;
    border: none;
    border-right: 1px solid #aaa;
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
    color: #999;
    cursor: pointer;
    font-size: 1em;
    font-weight: bold;
    padding: 0 4px
}

.select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover,.select2-container--default .select2-selection--multiple .select2-selection__choice__remove:focus {
    background-color: #f1f1f1;
    color: #333;
    outline: none
}

.select2-container--default[dir="rtl"] .select2-selection--multiple .select2-selection__choice {
    margin-left: 5px;
    margin-right: auto
}

.select2-container--default[dir="rtl"] .select2-selection--multiple .select2-selection__choice__display {
    padding-left: 5px;
    padding-right: 2px
}

.select2-container--default[dir="rtl"] .select2-selection--multiple .select2-selection__choice__remove {
    border-left: 1px solid #aaa;
    border-right: none;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px
}

.select2-container--default[dir="rtl"] .select2-selection--multiple .select2-selection__clear {
    float: left;
    margin-left: 10px;
    margin-right: auto
}

.select2-container--default.select2-container--focus .select2-selection--multiple {
    border: solid #000 1px;
    outline: 0
}

.select2-container--default.select2-container--disabled .select2-selection--multiple {
    background-color: #eee;
    cursor: default
}

.select2-container--default.select2-container--disabled .select2-selection__choice__remove {
    display: none
}

.select2-container--default.select2-container--open.select2-container--above .select2-selection--single,.select2-container--default.select2-container--open.select2-container--above .select2-selection--multiple {
    border-top-left-radius: 0;
    border-top-right-radius: 0
}

.select2-container--default.select2-container--open.select2-container--below .select2-selection--single,.select2-container--default.select2-container--open.select2-container--below .select2-selection--multiple {
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0
}

.select2-container--default .select2-search--dropdown .select2-search__field {
    border: 1px solid #aaa
}

.select2-container--default .select2-search--inline .select2-search__field {
    background: transparent;
    border: none;
    outline: 0;
    box-shadow: none;
    -webkit-appearance: textfield
}

.select2-container--default .select2-results>.select2-results__options {
    max-height: 200px;
    overflow-y: auto
}

.select2-container--default .select2-results__option .select2-results__option {
    padding-left: 1em
}

.select2-container--default .select2-results__option .select2-results__option .select2-results__group {
    padding-left: 0
}

.select2-container--default .select2-results__option .select2-results__option .select2-results__option {
    margin-left: -1em;
    padding-left: 2em
}

.select2-container--default .select2-results__option .select2-results__option .select2-results__option .select2-results__option {
    margin-left: -2em;
    padding-left: 3em
}

.select2-container--default .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option {
    margin-left: -3em;
    padding-left: 4em
}

.select2-container--default .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option {
    margin-left: -4em;
    padding-left: 5em
}

.select2-container--default .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option {
    margin-left: -5em;
    padding-left: 6em
}

.select2-container--default .select2-results__option--group {
    padding: 0
}

.select2-container--default .select2-results__option--disabled {
    color: #999
}

.select2-container--default .select2-results__option--selected {
    background-color: #ddd
}

.select2-container--default .select2-results__option--highlighted.select2-results__option--selectable {
    background-color: #5897fb;
    color: #fff
}

.select2-container--default .select2-results__group {
    cursor: default;
    display: block;
    padding: 6px
}

.select2-container--classic .select2-selection--single {
    background-color: #f7f7f7;
    border: 1px solid #aaa;
    border-radius: 4px;
    outline: 0;
    background-image: -webkit-linear-gradient(top,#fff 50%,#eee 100%);
    background-image: -o-linear-gradient(top,#fff 50%,#eee 100%);
    background-image: linear-gradient(to bottom,#fff 50%,#eee 100%);
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FFFFFFFF',endColorstr='#FFEEEEEE',GradientType=0)
}

.select2-container--classic .select2-selection--single:focus {
    border: 1px solid #5897fb
}

.select2-container--classic .select2-selection--single .select2-selection__rendered {
    color: #444;
    line-height: 28px
}

.select2-container--classic .select2-selection--single .select2-selection__clear {
    cursor: pointer;
    float: right;
    font-weight: bold;
    height: 26px;
    margin-right: 20px
}

.select2-container--classic .select2-selection--single .select2-selection__placeholder {
    color: #999
}

.select2-container--classic .select2-selection--single .select2-selection__arrow {
    background-color: #ddd;
    border: none;
    border-left: 1px solid #aaa;
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
    height: 26px;
    position: absolute;
    top: 1px;
    right: 1px;
    width: 20px;
    background-image: -webkit-linear-gradient(top,#eee 50%,#ccc 100%);
    background-image: -o-linear-gradient(top,#eee 50%,#ccc 100%);
    background-image: linear-gradient(to bottom,#eee 50%,#ccc 100%);
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FFEEEEEE',endColorstr='#FFCCCCCC',GradientType=0)
}

.select2-container--classic .select2-selection--single .select2-selection__arrow b {
    border-color: #888 transparent transparent transparent;
    border-style: solid;
    border-width: 5px 4px 0 4px;
    height: 0;
    left: 50%;
    margin-left: -4px;
    margin-top: -2px;
    position: absolute;
    top: 50%;
    width: 0
}

.select2-container--classic[dir="rtl"] .select2-selection--single .select2-selection__clear {
    float: left
}

.select2-container--classic[dir="rtl"] .select2-selection--single .select2-selection__arrow {
    border: none;
    border-right: 1px solid #aaa;
    border-radius: 0;
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
    left: 1px;
    right: auto
}

.select2-container--classic.select2-container--open .select2-selection--single {
    border: 1px solid #5897fb
}

.select2-container--classic.select2-container--open .select2-selection--single .select2-selection__arrow {
    background: transparent;
    border: none
}

.select2-container--classic.select2-container--open .select2-selection--single .select2-selection__arrow b {
    border-color: transparent transparent #888 transparent;
    border-width: 0 4px 5px 4px
}

.select2-container--classic.select2-container--open.select2-container--above .select2-selection--single {
    border-top: none;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    background-image: -webkit-linear-gradient(top,#fff 0%,#eee 50%);
    background-image: -o-linear-gradient(top,#fff 0%,#eee 50%);
    background-image: linear-gradient(to bottom,#fff 0%,#eee 50%);
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FFFFFFFF',endColorstr='#FFEEEEEE',GradientType=0)
}

.select2-container--classic.select2-container--open.select2-container--below .select2-selection--single {
    border-bottom: none;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
    background-image: -webkit-linear-gradient(top,#eee 50%,#fff 100%);
    background-image: -o-linear-gradient(top,#eee 50%,#fff 100%);
    background-image: linear-gradient(to bottom,#eee 50%,#fff 100%);
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FFEEEEEE',endColorstr='#FFFFFFFF',GradientType=0)
}

.select2-container--classic .select2-selection--multiple {
    background-color: #fff;
    border: 1px solid #aaa;
    border-radius: 4px;
    cursor: text;
    outline: 0;
    padding-bottom: 5px;
    padding-right: 5px
}

.select2-container--classic .select2-selection--multiple:focus {
    border: 1px solid #5897fb
}

.select2-container--classic .select2-selection--multiple .select2-selection__clear {
    display: none
}

.select2-container--classic .select2-selection--multiple .select2-selection__choice {
    background-color: #e4e4e4;
    border: 1px solid #aaa;
    border-radius: 4px;
    display: inline-block;
    margin-left: 5px;
    margin-top: 5px;
    padding: 0
}

.select2-container--classic .select2-selection--multiple .select2-selection__choice__display {
    cursor: default;
    padding-left: 2px;
    padding-right: 5px
}

.select2-container--classic .select2-selection--multiple .select2-selection__choice__remove {
    background-color: transparent;
    border: none;
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
    color: #888;
    cursor: pointer;
    font-size: 1em;
    font-weight: bold;
    padding: 0 4px
}

.select2-container--classic .select2-selection--multiple .select2-selection__choice__remove:hover {
    color: #555;
    outline: none
}

.select2-container--classic[dir="rtl"] .select2-selection--multiple .select2-selection__choice {
    margin-left: 5px;
    margin-right: auto
}

.select2-container--classic[dir="rtl"] .select2-selection--multiple .select2-selection__choice__display {
    padding-left: 5px;
    padding-right: 2px
}

.select2-container--classic[dir="rtl"] .select2-selection--multiple .select2-selection__choice__remove {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px
}

.select2-container--classic.select2-container--open .select2-selection--multiple {
    border: 1px solid #5897fb
}

.select2-container--classic.select2-container--open.select2-container--above .select2-selection--multiple {
    border-top: none;
    border-top-left-radius: 0;
    border-top-right-radius: 0
}

.select2-container--classic.select2-container--open.select2-container--below .select2-selection--multiple {
    border-bottom: none;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0
}

.select2-container--classic .select2-search--dropdown .select2-search__field {
    border: 1px solid #aaa;
    outline: 0
}

.select2-container--classic .select2-search--inline .select2-search__field {
    outline: 0;
    box-shadow: none
}

.select2-container--classic .select2-dropdown {
    background-color: #fff;
    border: 1px solid transparent
}

.select2-container--classic .select2-dropdown--above {
    border-bottom: none
}

.select2-container--classic .select2-dropdown--below {
    border-top: none
}

.select2-container--classic .select2-results>.select2-results__options {
    max-height: 200px;
    overflow-y: auto
}

.select2-container--classic .select2-results__option--group {
    padding: 0
}

.select2-container--classic .select2-results__option--disabled {
    color: #808080
}

.select2-container--classic .select2-results__option--highlighted.select2-results__option--selectable {
    background-color: #3875d7;
    color: #fff
}

.select2-container--classic .select2-results__group {
    cursor: default;
    display: block;
    padding: 6px
}

.select2-container--classic.select2-container--open .select2-dropdown {
    border-color: #5897fb
}

/*!
 *  Font Awesome 4.7.0 by @davegandy - http://fontawesome.io - @fontawesome
 *  License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
 */
@font-face {
    font-family: 'FontAwesome';
    src: url('../fonts/fontawesome-webfont.eot?v=4.7.0');
    src: url('../fonts/fontawesome-webfont.eot?#iefix&v=4.7.0') format('embedded-opentype'),url('../fonts/fontawesome-webfont.woff2?v=4.7.0') format('woff2'),url('../fonts/fontawesome-webfont.woff?v=4.7.0') format('woff'),url('../fonts/fontawesome-webfont.ttf?v=4.7.0') format('truetype'),url('../fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular') format('svg');
    font-weight: normal;
    font-style: normal
}

.fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    transform: translate(0,0)
}

.fa-lg {
    font-size: 1.33333333em;
    line-height: .75em;
    vertical-align: -15%
}

.fa-2x {
    font-size: 2em
}

.fa-3x {
    font-size: 3em
}

.fa-4x {
    font-size: 4em
}

.fa-5x {
    font-size: 5em
}

.fa-fw {
    width: 1.28571429em;
    text-align: center
}

.fa-ul {
    padding-left: 0;
    margin-left: 2.14285714em;
    list-style-type: none
}

.fa-ul>li {
    position: relative
}

.fa-li {
    position: absolute;
    left: -2.14285714em;
    width: 2.14285714em;
    top: .14285714em;
    text-align: center
}

.fa-li.fa-lg {
    left: -1.85714286em
}

.fa-border {
    padding: .2em .25em .15em;
    border: solid .08em #eee;
    border-radius: .1em
}

.fa-pull-left {
    float: left
}

.fa-pull-right {
    float: right
}

.fa.fa-pull-left {
    margin-right: .3em
}

.fa.fa-pull-right {
    margin-left: .3em
}

.pull-right {
    float: right
}

.pull-left {
    float: left
}

.fa.pull-left {
    margin-right: .3em
}

.fa.pull-right {
    margin-left: .3em
}

.fa-spin {
    -webkit-animation: fa-spin 2s infinite linear;
    animation: fa-spin 2s infinite linear
}

.fa-pulse {
    -webkit-animation: fa-spin 1s infinite steps(8);
    animation: fa-spin 1s infinite steps(8)
}

@-webkit-keyframes fa-spin {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg)
    }

    100% {
        -webkit-transform: rotate(359deg);
        transform: rotate(359deg)
    }
}

@keyframes fa-spin {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg)
    }

    100% {
        -webkit-transform: rotate(359deg);
        transform: rotate(359deg)
    }
}

.fa-rotate-90 {
    -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
    -webkit-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    transform: rotate(90deg)
}

.fa-rotate-180 {
    -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
    -webkit-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    transform: rotate(180deg)
}

.fa-rotate-270 {
    -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
    -webkit-transform: rotate(270deg);
    -ms-transform: rotate(270deg);
    transform: rotate(270deg)
}

.fa-flip-horizontal {
    -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
    -webkit-transform: scale(-1,1);
    -ms-transform: scale(-1,1);
    transform: scale(-1,1)
}

.fa-flip-vertical {
    -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
    -webkit-transform: scale(1,-1);
    -ms-transform: scale(1,-1);
    transform: scale(1,-1)
}

:root .fa-rotate-90,:root .fa-rotate-180,:root .fa-rotate-270,:root .fa-flip-horizontal,:root .fa-flip-vertical {
    filter: none
}

.fa-stack {
    position: relative;
    display: inline-block;
    width: 2em;
    height: 2em;
    line-height: 2em;
    vertical-align: middle
}

.fa-stack-1x,.fa-stack-2x {
    position: absolute;
    left: 0;
    width: 100%;
    text-align: center
}

.fa-stack-1x {
    line-height: inherit
}

.fa-stack-2x {
    font-size: 2em
}

.fa-inverse {
    color: #fff
}

.fa-glass:before {
    content: "ï€€"
}

.fa-music:before {
    content: "ï€"
}

.fa-search:before {
    content: "ï€‚"
}

.fa-envelope-o:before {
    content: "ï€ƒ"
}

.fa-heart:before {
    content: "ï€„"
}

.fa-star:before {
    content: "ï€…"
}

.fa-star-o:before {
    content: "ï€†"
}

.fa-user:before {
    content: "ï€‡"
}

.fa-film:before {
    content: "ï€ˆ"
}

.fa-th-large:before {
    content: "ï€‰"
}

.fa-th:before {
    content: "ï€Š"
}

.fa-th-list:before {
    content: "ï€‹"
}

.fa-check:before {
    content: "ï€Œ"
}

.fa-remove:before,.fa-close:before,.fa-times:before {
    content: "ï€"
}

.fa-search-plus:before {
    content: "ï€Ž"
}

.fa-search-minus:before {
    content: "ï€"
}

.fa-power-off:before {
    content: "ï€‘"
}

.fa-signal:before {
    content: "ï€’"
}

.fa-gear:before,.fa-cog:before {
    content: "ï€“"
}

.fa-trash-o:before {
    content: "ï€”"
}

.fa-home:before {
    content: "ï€•"
}

.fa-file-o:before {
    content: "ï€–"
}

.fa-clock-o:before {
    content: "ï€—"
}

.fa-road:before {
    content: "ï€˜"
}

.fa-download:before {
    content: "ï€™"
}

.fa-arrow-circle-o-down:before {
    content: "ï€š"
}

.fa-arrow-circle-o-up:before {
    content: "ï€›"
}

.fa-inbox:before {
    content: "ï€œ"
}

.fa-play-circle-o:before {
    content: "ï€"
}

.fa-rotate-right:before,.fa-repeat:before {
    content: "ï€ž"
}

.fa-refresh:before {
    content: "ï€¡"
}

.fa-list-alt:before {
    content: "ï€¢"
}

.fa-lock:before {
    content: "ï€£"
}

.fa-flag:before {
    content: "ï€¤"
}

.fa-headphones:before {
    content: "ï€¥"
}

.fa-volume-off:before {
    content: "ï€¦"
}

.fa-volume-down:before {
    content: "ï€§"
}

.fa-volume-up:before {
    content: "ï€¨"
}

.fa-qrcode:before {
    content: "ï€©"
}

.fa-barcode:before {
    content: "ï€ª"
}

.fa-tag:before {
    content: "ï€«"
}

.fa-tags:before {
    content: "ï€¬"
}

.fa-book:before {
    content: "ï€­"
}

.fa-bookmark:before {
    content: "ï€®"
}

.fa-print:before {
    content: "ï€¯"
}

.fa-camera:before {
    content: "ï€°"
}

.fa-font:before {
    content: "ï€±"
}

.fa-bold:before {
    content: "ï€²"
}

.fa-italic:before {
    content: "ï€³"
}

.fa-text-height:before {
    content: "ï€´"
}

.fa-text-width:before {
    content: "ï€µ"
}

.fa-align-left:before {
    content: "ï€¶"
}

.fa-align-center:before {
    content: "ï€·"
}

.fa-align-right:before {
    content: "ï€¸"
}

.fa-align-justify:before {
    content: "ï€¹"
}

.fa-list:before {
    content: "ï€º"
}

.fa-dedent:before,.fa-outdent:before {
    content: "ï€»"
}

.fa-indent:before {
    content: "ï€¼"
}

.fa-video-camera:before {
    content: "ï€½"
}

.fa-photo:before,.fa-image:before,.fa-picture-o:before {
    content: "ï€¾"
}

.fa-pencil:before {
    content: "ï€"
}

.fa-map-marker:before {
    content: "ï"
}

.fa-adjust:before {
    content: "ï‚"
}

.fa-tint:before {
    content: "ïƒ"
}

.fa-edit:before,.fa-pencil-square-o:before {
    content: "ï„"
}

.fa-share-square-o:before {
    content: "ï…"
}

.fa-check-square-o:before {
    content: "ï†"
}

.fa-arrows:before {
    content: "ï‡"
}

.fa-step-backward:before {
    content: "ïˆ"
}

.fa-fast-backward:before {
    content: "ï‰"
}

.fa-backward:before {
    content: "ïŠ"
}

.fa-play:before {
    content: "ï‹"
}

.fa-pause:before {
    content: "ïŒ"
}

.fa-stop:before {
    content: "ï"
}

.fa-forward:before {
    content: "ïŽ"
}

.fa-fast-forward:before {
    content: "ï"
}

.fa-step-forward:before {
    content: "ï‘"
}

.fa-eject:before {
    content: "ï’"
}

.fa-chevron-left:before {
    content: "ï“"
}

.fa-chevron-right:before {
    content: "ï”"
}

.fa-plus-circle:before {
    content: "ï•"
}

.fa-minus-circle:before {
    content: "ï–"
}

.fa-times-circle:before {
    content: "ï—"
}

.fa-check-circle:before {
    content: "ï˜"
}

.fa-question-circle:before {
    content: "ï™"
}

.fa-info-circle:before {
    content: "ïš"
}

.fa-crosshairs:before {
    content: "ï›"
}

.fa-times-circle-o:before {
    content: "ïœ"
}

.fa-check-circle-o:before {
    content: "ï"
}

.fa-ban:before {
    content: "ïž"
}

.fa-arrow-left:before {
    content: "ï "
}

.fa-arrow-right:before {
    content: "ï¡"
}

.fa-arrow-up:before {
    content: "ï¢"
}

.fa-arrow-down:before {
    content: "ï£"
}

.fa-mail-forward:before,.fa-share:before {
    content: "ï¤"
}

.fa-expand:before {
    content: "ï¥"
}

.fa-compress:before {
    content: "ï¦"
}

.fa-plus:before {
    content: "ï§"
}

.fa-minus:before {
    content: "ï¨"
}

.fa-asterisk:before {
    content: "ï©"
}

.fa-exclamation-circle:before {
    content: "ïª"
}

.fa-gift:before {
    content: "ï«"
}

.fa-leaf:before {
    content: "ï¬"
}

.fa-fire:before {
    content: "ï­"
}

.fa-eye:before {
    content: "ï®"
}

.fa-eye-slash:before {
    content: "ï°"
}

.fa-warning:before,.fa-exclamation-triangle:before {
    content: "ï±"
}

.fa-plane:before {
    content: "ï²"
}

.fa-calendar:before {
    content: "ï³"
}

.fa-random:before {
    content: "ï´"
}

.fa-comment:before {
    content: "ïµ"
}

.fa-magnet:before {
    content: "ï¶"
}

.fa-chevron-up:before {
    content: "ï·"
}

.fa-chevron-down:before {
    content: "ï¸"
}

.fa-retweet:before {
    content: "ï¹"
}

.fa-shopping-cart:before {
    content: "ïº"
}

.fa-folder:before {
    content: "ï»"
}

.fa-folder-open:before {
    content: "ï¼"
}

.fa-arrows-v:before {
    content: "ï½"
}

.fa-arrows-h:before {
    content: "ï¾"
}

.fa-bar-chart-o:before,.fa-bar-chart:before {
    content: "ï‚€"
}

.fa-twitter-square:before {
    content: "ï‚"
}

.fa-facebook-square:before {
    content: "ï‚‚"
}

.fa-camera-retro:before {
    content: "ï‚ƒ"
}

.fa-key:before {
    content: "ï‚„"
}

.fa-gears:before,.fa-cogs:before {
    content: "ï‚…"
}

.fa-comments:before {
    content: "ï‚†"
}

.fa-thumbs-o-up:before {
    content: "ï‚‡"
}

.fa-thumbs-o-down:before {
    content: "ï‚ˆ"
}

.fa-star-half:before {
    content: "ï‚‰"
}

.fa-heart-o:before {
    content: "ï‚Š"
}

.fa-sign-out:before {
    content: "ï‚‹"
}

.fa-linkedin-square:before {
    content: "ï‚Œ"
}

.fa-thumb-tack:before {
    content: "ï‚"
}

.fa-external-link:before {
    content: "ï‚Ž"
}

.fa-sign-in:before {
    content: "ï‚"
}

.fa-trophy:before {
    content: "ï‚‘"
}

.fa-github-square:before {
    content: "ï‚’"
}

.fa-upload:before {
    content: "ï‚“"
}

.fa-lemon-o:before {
    content: "ï‚”"
}

.fa-phone:before {
    content: "ï‚•"
}

.fa-square-o:before {
    content: "ï‚–"
}

.fa-bookmark-o:before {
    content: "ï‚—"
}

.fa-phone-square:before {
    content: "ï‚˜"
}

.fa-twitter:before {
    content: "ï‚™"
}

.fa-facebook-f:before,.fa-facebook:before {
    content: "ï‚š"
}

.fa-github:before {
    content: "ï‚›"
}

.fa-unlock:before {
    content: "ï‚œ"
}

.fa-credit-card:before {
    content: "ï‚"
}

.fa-feed:before,.fa-rss:before {
    content: "ï‚ž"
}

.fa-hdd-o:before {
    content: "ï‚ "
}

.fa-bullhorn:before {
    content: "ï‚¡"
}

.fa-bell:before {
    content: "ïƒ³"
}

.fa-certificate:before {
    content: "ï‚£"
}

.fa-hand-o-right:before {
    content: "ï‚¤"
}

.fa-hand-o-left:before {
    content: "ï‚¥"
}

.fa-hand-o-up:before {
    content: "ï‚¦"
}

.fa-hand-o-down:before {
    content: "ï‚§"
}

.fa-arrow-circle-left:before {
    content: "ï‚¨"
}

.fa-arrow-circle-right:before {
    content: "ï‚©"
}

.fa-arrow-circle-up:before {
    content: "ï‚ª"
}

.fa-arrow-circle-down:before {
    content: "ï‚«"
}

.fa-globe:before {
    content: "ï‚¬"
}

.fa-wrench:before {
    content: "ï‚­"
}

.fa-tasks:before {
    content: "ï‚®"
}

.fa-filter:before {
    content: "ï‚°"
}

.fa-briefcase:before {
    content: "ï‚±"
}

.fa-arrows-alt:before {
    content: "ï‚²"
}

.fa-group:before,.fa-users:before {
    content: "ïƒ€"
}

.fa-chain:before,.fa-link:before {
    content: "ïƒ"
}

.fa-cloud:before {
    content: "ïƒ‚"
}

.fa-flask:before {
    content: "ïƒƒ"
}

.fa-cut:before,.fa-scissors:before {
    content: "ïƒ„"
}

.fa-copy:before,.fa-files-o:before {
    content: "ïƒ…"
}

.fa-paperclip:before {
    content: "ïƒ†"
}

.fa-save:before,.fa-floppy-o:before {
    content: "ïƒ‡"
}

.fa-square:before {
    content: "ïƒˆ"
}

.fa-navicon:before,.fa-reorder:before,.fa-bars:before {
    content: "ïƒ‰"
}

.fa-list-ul:before {
    content: "ïƒŠ"
}

.fa-list-ol:before {
    content: "ïƒ‹"
}

.fa-strikethrough:before {
    content: "ïƒŒ"
}

.fa-underline:before {
    content: "ïƒ"
}

.fa-table:before {
    content: "ïƒŽ"
}

.fa-magic:before {
    content: "ïƒ"
}

.fa-truck:before {
    content: "ïƒ‘"
}

.fa-pinterest:before {
    content: "ïƒ’"
}

.fa-pinterest-square:before {
    content: "ïƒ“"
}

.fa-google-plus-square:before {
    content: "ïƒ”"
}

.fa-google-plus:before {
    content: "ïƒ•"
}

.fa-money:before {
    content: "ïƒ–"
}

.fa-caret-down:before {
    content: "ïƒ—"
}

.fa-caret-up:before {
    content: "ïƒ˜"
}

.fa-caret-left:before {
    content: "ïƒ™"
}

.fa-caret-right:before {
    content: "ïƒš"
}

.fa-columns:before {
    content: "ïƒ›"
}

.fa-unsorted:before,.fa-sort:before {
    content: "ïƒœ"
}

.fa-sort-down:before,.fa-sort-desc:before {
    content: "ïƒ"
}

.fa-sort-up:before,.fa-sort-asc:before {
    content: "ïƒž"
}

.fa-envelope:before {
    content: "ïƒ "
}

.fa-linkedin:before {
    content: "ïƒ¡"
}

.fa-rotate-left:before,.fa-undo:before {
    content: "ïƒ¢"
}

.fa-legal:before,.fa-gavel:before {
    content: "ïƒ£"
}

.fa-dashboard:before,.fa-tachometer:before {
    content: "ïƒ¤"
}

.fa-comment-o:before {
    content: "ïƒ¥"
}

.fa-comments-o:before {
    content: "ïƒ¦"
}

.fa-flash:before,.fa-bolt:before {
    content: "ïƒ§"
}

.fa-sitemap:before {
    content: "ïƒ¨"
}

.fa-umbrella:before {
    content: "ïƒ©"
}

.fa-paste:before,.fa-clipboard:before {
    content: "ïƒª"
}

.fa-lightbulb-o:before {
    content: "ïƒ«"
}

.fa-exchange:before {
    content: "ïƒ¬"
}

.fa-cloud-download:before {
    content: "ïƒ­"
}

.fa-cloud-upload:before {
    content: "ïƒ®"
}

.fa-user-md:before {
    content: "ïƒ°"
}

.fa-stethoscope:before {
    content: "ïƒ±"
}

.fa-suitcase:before {
    content: "ïƒ²"
}

.fa-bell-o:before {
    content: "ï‚¢"
}

.fa-coffee:before {
    content: "ïƒ´"
}

.fa-cutlery:before {
    content: "ïƒµ"
}

.fa-file-text-o:before {
    content: "ïƒ¶"
}

.fa-building-o:before {
    content: "ïƒ·"
}

.fa-hospital-o:before {
    content: "ïƒ¸"
}

.fa-ambulance:before {
    content: "ïƒ¹"
}

.fa-medkit:before {
    content: "ïƒº"
}

.fa-fighter-jet:before {
    content: "ïƒ»"
}

.fa-beer:before {
    content: "ïƒ¼"
}

.fa-h-square:before {
    content: "ïƒ½"
}

.fa-plus-square:before {
    content: "ïƒ¾"
}

.fa-angle-double-left:before {
    content: "ï„€"
}

.fa-angle-double-right:before {
    content: "ï„"
}

.fa-angle-double-up:before {
    content: "ï„‚"
}

.fa-angle-double-down:before {
    content: "ï„ƒ"
}

.fa-angle-left:before {
    content: "ï„„"
}

.fa-angle-right:before {
    content: "ï„…"
}

.fa-angle-up:before {
    content: "ï„†"
}

.fa-angle-down:before {
    content: "ï„‡"
}

.fa-desktop:before {
    content: "ï„ˆ"
}

.fa-laptop:before {
    content: "ï„‰"
}

.fa-tablet:before {
    content: "ï„Š"
}

.fa-mobile-phone:before,.fa-mobile:before {
    content: "ï„‹"
}

.fa-circle-o:before {
    content: "ï„Œ"
}

.fa-quote-left:before {
    content: "ï„"
}

.fa-quote-right:before {
    content: "ï„Ž"
}

.fa-spinner:before {
    content: "ï„"
}

.fa-circle:before {
    content: "ï„‘"
}

.fa-mail-reply:before,.fa-reply:before {
    content: "ï„’"
}

.fa-github-alt:before {
    content: "ï„“"
}

.fa-folder-o:before {
    content: "ï„”"
}

.fa-folder-open-o:before {
    content: "ï„•"
}

.fa-smile-o:before {
    content: "ï„˜"
}

.fa-frown-o:before {
    content: "ï„™"
}

.fa-meh-o:before {
    content: "ï„š"
}

.fa-gamepad:before {
    content: "ï„›"
}

.fa-keyboard-o:before {
    content: "ï„œ"
}

.fa-flag-o:before {
    content: "ï„"
}

.fa-flag-checkered:before {
    content: "ï„ž"
}

.fa-terminal:before {
    content: "ï„ "
}

.fa-code:before {
    content: "ï„¡"
}

.fa-mail-reply-all:before,.fa-reply-all:before {
    content: "ï„¢"
}

.fa-star-half-empty:before,.fa-star-half-full:before,.fa-star-half-o:before {
    content: "ï„£"
}

.fa-location-arrow:before {
    content: "ï„¤"
}

.fa-crop:before {
    content: "ï„¥"
}

.fa-code-fork:before {
    content: "ï„¦"
}

.fa-unlink:before,.fa-chain-broken:before {
    content: "ï„§"
}

.fa-question:before {
    content: "ï„¨"
}

.fa-info:before {
    content: "ï„©"
}

.fa-exclamation:before {
    content: "ï„ª"
}

.fa-superscript:before {
    content: "ï„«"
}

.fa-subscript:before {
    content: "ï„¬"
}

.fa-eraser:before {
    content: "ï„­"
}

.fa-puzzle-piece:before {
    content: "ï„®"
}

.fa-microphone:before {
    content: "ï„°"
}

.fa-microphone-slash:before {
    content: "ï„±"
}

.fa-shield:before {
    content: "ï„²"
}

.fa-calendar-o:before {
    content: "ï„³"
}

.fa-fire-extinguisher:before {
    content: "ï„´"
}

.fa-rocket:before {
    content: "ï„µ"
}

.fa-maxcdn:before {
    content: "ï„¶"
}

.fa-chevron-circle-left:before {
    content: "ï„·"
}

.fa-chevron-circle-right:before {
    content: "ï„¸"
}

.fa-chevron-circle-up:before {
    content: "ï„¹"
}

.fa-chevron-circle-down:before {
    content: "ï„º"
}

.fa-html5:before {
    content: "ï„»"
}

.fa-css3:before {
    content: "ï„¼"
}

.fa-anchor:before {
    content: "ï„½"
}

.fa-unlock-alt:before {
    content: "ï„¾"
}

.fa-bullseye:before {
    content: "ï…€"
}

.fa-ellipsis-h:before {
    content: "ï…"
}

.fa-ellipsis-v:before {
    content: "ï…‚"
}

.fa-rss-square:before {
    content: "ï…ƒ"
}

.fa-play-circle:before {
    content: "ï…„"
}

.fa-ticket:before {
    content: "ï……"
}

.fa-minus-square:before {
    content: "ï…†"
}

.fa-minus-square-o:before {
    content: "ï…‡"
}

.fa-level-up:before {
    content: "ï…ˆ"
}

.fa-level-down:before {
    content: "ï…‰"
}

.fa-check-square:before {
    content: "ï…Š"
}

.fa-pencil-square:before {
    content: "ï…‹"
}

.fa-external-link-square:before {
    content: "ï…Œ"
}

.fa-share-square:before {
    content: "ï…"
}

.fa-compass:before {
    content: "ï…Ž"
}

.fa-toggle-down:before,.fa-caret-square-o-down:before {
    content: "ï…"
}

.fa-toggle-up:before,.fa-caret-square-o-up:before {
    content: "ï…‘"
}

.fa-toggle-right:before,.fa-caret-square-o-right:before {
    content: "ï…’"
}

.fa-euro:before,.fa-eur:before {
    content: "ï…“"
}

.fa-gbp:before {
    content: "ï…”"
}

.fa-dollar:before,.fa-usd:before {
    content: "ï…•"
}

.fa-rupee:before,.fa-inr:before {
    content: "ï…–"
}

.fa-cny:before,.fa-rmb:before,.fa-yen:before,.fa-jpy:before {
    content: "ï…—"
}

.fa-ruble:before,.fa-rouble:before,.fa-rub:before {
    content: "ï…˜"
}

.fa-won:before,.fa-krw:before {
    content: "ï…™"
}

.fa-bitcoin:before,.fa-btc:before {
    content: "ï…š"
}

.fa-file:before {
    content: "ï…›"
}

.fa-file-text:before {
    content: "ï…œ"
}

.fa-sort-alpha-asc:before {
    content: "ï…"
}

.fa-sort-alpha-desc:before {
    content: "ï…ž"
}

.fa-sort-amount-asc:before {
    content: "ï… "
}

.fa-sort-amount-desc:before {
    content: "ï…¡"
}

.fa-sort-numeric-asc:before {
    content: "ï…¢"
}

.fa-sort-numeric-desc:before {
    content: "ï…£"
}

.fa-thumbs-up:before {
    content: "ï…¤"
}

.fa-thumbs-down:before {
    content: "ï…¥"
}

.fa-youtube-square:before {
    content: "ï…¦"
}

.fa-youtube:before {
    content: "ï…§"
}

.fa-xing:before {
    content: "ï…¨"
}

.fa-xing-square:before {
    content: "ï…©"
}

.fa-youtube-play:before {
    content: "ï…ª"
}

.fa-dropbox:before {
    content: "ï…«"
}

.fa-stack-overflow:before {
    content: "ï…¬"
}

.fa-instagram:before {
    content: "ï…­"
}

.fa-flickr:before {
    content: "ï…®"
}

.fa-adn:before {
    content: "ï…°"
}

.fa-bitbucket:before {
    content: "ï…±"
}

.fa-bitbucket-square:before {
    content: "ï…²"
}

.fa-tumblr:before {
    content: "ï…³"
}

.fa-tumblr-square:before {
    content: "ï…´"
}

.fa-long-arrow-down:before {
    content: "ï…µ"
}

.fa-long-arrow-up:before {
    content: "ï…¶"
}

.fa-long-arrow-left:before {
    content: "ï…·"
}

.fa-long-arrow-right:before {
    content: "ï…¸"
}

.fa-apple:before {
    content: "ï…¹"
}

.fa-windows:before {
    content: "ï…º"
}

.fa-android:before {
    content: "ï…»"
}

.fa-linux:before {
    content: "ï…¼"
}

.fa-dribbble:before {
    content: "ï…½"
}

.fa-skype:before {
    content: "ï…¾"
}

.fa-foursquare:before {
    content: "ï†€"
}

.fa-trello:before {
    content: "ï†"
}

.fa-female:before {
    content: "ï†‚"
}

.fa-male:before {
    content: "ï†ƒ"
}

.fa-gittip:before,.fa-gratipay:before {
    content: "ï†„"
}

.fa-sun-o:before {
    content: "ï†…"
}

.fa-moon-o:before {
    content: "ï††"
}

.fa-archive:before {
    content: "ï†‡"
}

.fa-bug:before {
    content: "ï†ˆ"
}

.fa-vk:before {
    content: "ï†‰"
}

.fa-weibo:before {
    content: "ï†Š"
}

.fa-renren:before {
    content: "ï†‹"
}

.fa-pagelines:before {
    content: "ï†Œ"
}

.fa-stack-exchange:before {
    content: "ï†"
}

.fa-arrow-circle-o-right:before {
    content: "ï†Ž"
}

.fa-arrow-circle-o-left:before {
    content: "ï†"
}

.fa-toggle-left:before,.fa-caret-square-o-left:before {
    content: "ï†‘"
}

.fa-dot-circle-o:before {
    content: "ï†’"
}

.fa-wheelchair:before {
    content: "ï†“"
}

.fa-vimeo-square:before {
    content: "ï†”"
}

.fa-turkish-lira:before,.fa-try:before {
    content: "ï†•"
}

.fa-plus-square-o:before {
    content: "ï†–"
}

.fa-space-shuttle:before {
    content: "ï†—"
}

.fa-slack:before {
    content: "ï†˜"
}

.fa-envelope-square:before {
    content: "ï†™"
}

.fa-wordpress:before {
    content: "ï†š"
}

.fa-openid:before {
    content: "ï†›"
}

.fa-institution:before,.fa-bank:before,.fa-university:before {
    content: "ï†œ"
}

.fa-mortar-board:before,.fa-graduation-cap:before {
    content: "ï†"
}

.fa-yahoo:before {
    content: "ï†ž"
}

.fa-google:before {
    content: "ï† "
}

.fa-reddit:before {
    content: "ï†¡"
}

.fa-reddit-square:before {
    content: "ï†¢"
}

.fa-stumbleupon-circle:before {
    content: "ï†£"
}

.fa-stumbleupon:before {
    content: "ï†¤"
}

.fa-delicious:before {
    content: "ï†¥"
}

.fa-digg:before {
    content: "ï†¦"
}

.fa-pied-piper-pp:before {
    content: "ï†§"
}

.fa-pied-piper-alt:before {
    content: "ï†¨"
}

.fa-drupal:before {
    content: "ï†©"
}

.fa-joomla:before {
    content: "ï†ª"
}

.fa-language:before {
    content: "ï†«"
}

.fa-fax:before {
    content: "ï†¬"
}

.fa-building:before {
    content: "ï†­"
}

.fa-child:before {
    content: "ï†®"
}

.fa-paw:before {
    content: "ï†°"
}

.fa-spoon:before {
    content: "ï†±"
}

.fa-cube:before {
    content: "ï†²"
}

.fa-cubes:before {
    content: "ï†³"
}

.fa-behance:before {
    content: "ï†´"
}

.fa-behance-square:before {
    content: "ï†µ"
}

.fa-steam:before {
    content: "ï†¶"
}

.fa-steam-square:before {
    content: "ï†·"
}

.fa-recycle:before {
    content: "ï†¸"
}

.fa-automobile:before,.fa-car:before {
    content: "ï†¹"
}

.fa-cab:before,.fa-taxi:before {
    content: "ï†º"
}

.fa-tree:before {
    content: "ï†»"
}

.fa-spotify:before {
    content: "ï†¼"
}

.fa-deviantart:before {
    content: "ï†½"
}

.fa-soundcloud:before {
    content: "ï†¾"
}

.fa-database:before {
    content: "ï‡€"
}

.fa-file-pdf-o:before {
    content: "ï‡"
}

.fa-file-word-o:before {
    content: "ï‡‚"
}

.fa-file-excel-o:before {
    content: "ï‡ƒ"
}

.fa-file-powerpoint-o:before {
    content: "ï‡„"
}

.fa-file-photo-o:before,.fa-file-picture-o:before,.fa-file-image-o:before {
    content: "ï‡…"
}

.fa-file-zip-o:before,.fa-file-archive-o:before {
    content: "ï‡†"
}

.fa-file-sound-o:before,.fa-file-audio-o:before {
    content: "ï‡‡"
}

.fa-file-movie-o:before,.fa-file-video-o:before {
    content: "ï‡ˆ"
}

.fa-file-code-o:before {
    content: "ï‡‰"
}

.fa-vine:before {
    content: "ï‡Š"
}

.fa-codepen:before {
    content: "ï‡‹"
}

.fa-jsfiddle:before {
    content: "ï‡Œ"
}

.fa-life-bouy:before,.fa-life-buoy:before,.fa-life-saver:before,.fa-support:before,.fa-life-ring:before {
    content: "ï‡"
}

.fa-circle-o-notch:before {
    content: "ï‡Ž"
}

.fa-ra:before,.fa-resistance:before,.fa-rebel:before {
    content: "ï‡"
}

.fa-ge:before,.fa-empire:before {
    content: "ï‡‘"
}

.fa-git-square:before {
    content: "ï‡’"
}

.fa-git:before {
    content: "ï‡“"
}

.fa-y-combinator-square:before,.fa-yc-square:before,.fa-hacker-news:before {
    content: "ï‡”"
}

.fa-tencent-weibo:before {
    content: "ï‡•"
}

.fa-qq:before {
    content: "ï‡–"
}

.fa-wechat:before,.fa-weixin:before {
    content: "ï‡—"
}

.fa-send:before,.fa-paper-plane:before {
    content: "ï‡˜"
}

.fa-send-o:before,.fa-paper-plane-o:before {
    content: "ï‡™"
}

.fa-history:before {
    content: "ï‡š"
}

.fa-circle-thin:before {
    content: "ï‡›"
}

.fa-header:before {
    content: "ï‡œ"
}

.fa-paragraph:before {
    content: "ï‡"
}

.fa-sliders:before {
    content: "ï‡ž"
}

.fa-share-alt:before {
    content: "ï‡ "
}

.fa-share-alt-square:before {
    content: "ï‡¡"
}

.fa-bomb:before {
    content: "ï‡¢"
}

.fa-soccer-ball-o:before,.fa-futbol-o:before {
    content: "ï‡£"
}

.fa-tty:before {
    content: "ï‡¤"
}

.fa-binoculars:before {
    content: "ï‡¥"
}

.fa-plug:before {
    content: "ï‡¦"
}

.fa-slideshare:before {
    content: "ï‡§"
}

.fa-twitch:before {
    content: "ï‡¨"
}

.fa-yelp:before {
    content: "ï‡©"
}

.fa-newspaper-o:before {
    content: "ï‡ª"
}

.fa-wifi:before {
    content: "ï‡«"
}

.fa-calculator:before {
    content: "ï‡¬"
}

.fa-paypal:before {
    content: "ï‡­"
}

.fa-google-wallet:before {
    content: "ï‡®"
}

.fa-cc-visa:before {
    content: "ï‡°"
}

.fa-cc-mastercard:before {
    content: "ï‡±"
}

.fa-cc-discover:before {
    content: "ï‡²"
}

.fa-cc-amex:before {
    content: "ï‡³"
}

.fa-cc-paypal:before {
    content: "ï‡´"
}

.fa-cc-stripe:before {
    content: "ï‡µ"
}

.fa-bell-slash:before {
    content: "ï‡¶"
}

.fa-bell-slash-o:before {
    content: "ï‡·"
}

.fa-trash:before {
    content: "ï‡¸"
}

.fa-copyright:before {
    content: "ï‡¹"
}

.fa-at:before {
    content: "ï‡º"
}

.fa-eyedropper:before {
    content: "ï‡»"
}

.fa-paint-brush:before {
    content: "ï‡¼"
}

.fa-birthday-cake:before {
    content: "ï‡½"
}

.fa-area-chart:before {
    content: "ï‡¾"
}

.fa-pie-chart:before {
    content: "ïˆ€"
}

.fa-line-chart:before {
    content: "ïˆ"
}

.fa-lastfm:before {
    content: "ïˆ‚"
}

.fa-lastfm-square:before {
    content: "ïˆƒ"
}

.fa-toggle-off:before {
    content: "ïˆ„"
}

.fa-toggle-on:before {
    content: "ïˆ…"
}

.fa-bicycle:before {
    content: "ïˆ†"
}

.fa-bus:before {
    content: "ïˆ‡"
}

.fa-ioxhost:before {
    content: "ïˆˆ"
}

.fa-angellist:before {
    content: "ïˆ‰"
}

.fa-cc:before {
    content: "ïˆŠ"
}

.fa-shekel:before,.fa-sheqel:before,.fa-ils:before {
    content: "ïˆ‹"
}

.fa-meanpath:before {
    content: "ïˆŒ"
}

.fa-buysellads:before {
    content: "ïˆ"
}

.fa-connectdevelop:before {
    content: "ïˆŽ"
}

.fa-dashcube:before {
    content: "ïˆ"
}

.fa-forumbee:before {
    content: "ïˆ‘"
}

.fa-leanpub:before {
    content: "ïˆ’"
}

.fa-sellsy:before {
    content: "ïˆ“"
}

.fa-shirtsinbulk:before {
    content: "ïˆ”"
}

.fa-simplybuilt:before {
    content: "ïˆ•"
}

.fa-skyatlas:before {
    content: "ïˆ–"
}

.fa-cart-plus:before {
    content: "ïˆ—"
}

.fa-cart-arrow-down:before {
    content: "ïˆ˜"
}

.fa-diamond:before {
    content: "ïˆ™"
}

.fa-ship:before {
    content: "ïˆš"
}

.fa-user-secret:before {
    content: "ïˆ›"
}

.fa-motorcycle:before {
    content: "ïˆœ"
}

.fa-street-view:before {
    content: "ïˆ"
}

.fa-heartbeat:before {
    content: "ïˆž"
}

.fa-venus:before {
    content: "ïˆ¡"
}

.fa-mars:before {
    content: "ïˆ¢"
}

.fa-mercury:before {
    content: "ïˆ£"
}

.fa-intersex:before,.fa-transgender:before {
    content: "ïˆ¤"
}

.fa-transgender-alt:before {
    content: "ïˆ¥"
}

.fa-venus-double:before {
    content: "ïˆ¦"
}

.fa-mars-double:before {
    content: "ïˆ§"
}

.fa-venus-mars:before {
    content: "ïˆ¨"
}

.fa-mars-stroke:before {
    content: "ïˆ©"
}

.fa-mars-stroke-v:before {
    content: "ïˆª"
}

.fa-mars-stroke-h:before {
    content: "ïˆ«"
}

.fa-neuter:before {
    content: "ïˆ¬"
}

.fa-genderless:before {
    content: "ïˆ­"
}

.fa-facebook-official:before {
    content: "ïˆ°"
}

.fa-pinterest-p:before {
    content: "ïˆ±"
}

.fa-whatsapp:before {
    content: "ïˆ²"
}

.fa-server:before {
    content: "ïˆ³"
}

.fa-user-plus:before {
    content: "ïˆ´"
}

.fa-user-times:before {
    content: "ïˆµ"
}

.fa-hotel:before,.fa-bed:before {
    content: "ïˆ¶"
}

.fa-viacoin:before {
    content: "ïˆ·"
}

.fa-train:before {
    content: "ïˆ¸"
}

.fa-subway:before {
    content: "ïˆ¹"
}

.fa-medium:before {
    content: "ïˆº"
}

.fa-yc:before,.fa-y-combinator:before {
    content: "ïˆ»"
}

.fa-optin-monster:before {
    content: "ïˆ¼"
}

.fa-opencart:before {
    content: "ïˆ½"
}

.fa-expeditedssl:before {
    content: "ïˆ¾"
}

.fa-battery-4:before,.fa-battery:before,.fa-battery-full:before {
    content: "ï‰€"
}

.fa-battery-3:before,.fa-battery-three-quarters:before {
    content: "ï‰"
}

.fa-battery-2:before,.fa-battery-half:before {
    content: "ï‰‚"
}

.fa-battery-1:before,.fa-battery-quarter:before {
    content: "ï‰ƒ"
}

.fa-battery-0:before,.fa-battery-empty:before {
    content: "ï‰„"
}

.fa-mouse-pointer:before {
    content: "ï‰…"
}

.fa-i-cursor:before {
    content: "ï‰†"
}

.fa-object-group:before {
    content: "ï‰‡"
}

.fa-object-ungroup:before {
    content: "ï‰ˆ"
}

.fa-sticky-note:before {
    content: "ï‰‰"
}

.fa-sticky-note-o:before {
    content: "ï‰Š"
}

.fa-cc-jcb:before {
    content: "ï‰‹"
}

.fa-cc-diners-club:before {
    content: "ï‰Œ"
}

.fa-clone:before {
    content: "ï‰"
}

.fa-balance-scale:before {
    content: "ï‰Ž"
}

.fa-hourglass-o:before {
    content: "ï‰"
}

.fa-hourglass-1:before,.fa-hourglass-start:before {
    content: "ï‰‘"
}

.fa-hourglass-2:before,.fa-hourglass-half:before {
    content: "ï‰’"
}

.fa-hourglass-3:before,.fa-hourglass-end:before {
    content: "ï‰“"
}

.fa-hourglass:before {
    content: "ï‰”"
}

.fa-hand-grab-o:before,.fa-hand-rock-o:before {
    content: "ï‰•"
}

.fa-hand-stop-o:before,.fa-hand-paper-o:before {
    content: "ï‰–"
}

.fa-hand-scissors-o:before {
    content: "ï‰—"
}

.fa-hand-lizard-o:before {
    content: "ï‰˜"
}

.fa-hand-spock-o:before {
    content: "ï‰™"
}

.fa-hand-pointer-o:before {
    content: "ï‰š"
}

.fa-hand-peace-o:before {
    content: "ï‰›"
}

.fa-trademark:before {
    content: "ï‰œ"
}

.fa-registered:before {
    content: "ï‰"
}

.fa-creative-commons:before {
    content: "ï‰ž"
}

.fa-gg:before {
    content: "ï‰ "
}

.fa-gg-circle:before {
    content: "ï‰¡"
}

.fa-tripadvisor:before {
    content: "ï‰¢"
}

.fa-odnoklassniki:before {
    content: "ï‰£"
}

.fa-odnoklassniki-square:before {
    content: "ï‰¤"
}

.fa-get-pocket:before {
    content: "ï‰¥"
}

.fa-wikipedia-w:before {
    content: "ï‰¦"
}

.fa-safari:before {
    content: "ï‰§"
}

.fa-chrome:before {
    content: "ï‰¨"
}

.fa-firefox:before {
    content: "ï‰©"
}

.fa-opera:before {
    content: "ï‰ª"
}

.fa-internet-explorer:before {
    content: "ï‰«"
}

.fa-tv:before,.fa-television:before {
    content: "ï‰¬"
}

.fa-contao:before {
    content: "ï‰­"
}

.fa-500px:before {
    content: "ï‰®"
}

.fa-amazon:before {
    content: "ï‰°"
}

.fa-calendar-plus-o:before {
    content: "ï‰±"
}

.fa-calendar-minus-o:before {
    content: "ï‰²"
}

.fa-calendar-times-o:before {
    content: "ï‰³"
}

.fa-calendar-check-o:before {
    content: "ï‰´"
}

.fa-industry:before {
    content: "ï‰µ"
}

.fa-map-pin:before {
    content: "ï‰¶"
}

.fa-map-signs:before {
    content: "ï‰·"
}

.fa-map-o:before {
    content: "ï‰¸"
}

.fa-map:before {
    content: "ï‰¹"
}

.fa-commenting:before {
    content: "ï‰º"
}

.fa-commenting-o:before {
    content: "ï‰»"
}

.fa-houzz:before {
    content: "ï‰¼"
}

.fa-vimeo:before {
    content: "ï‰½"
}

.fa-black-tie:before {
    content: "ï‰¾"
}

.fa-fonticons:before {
    content: "ïŠ€"
}

.fa-reddit-alien:before {
    content: "ïŠ"
}

.fa-edge:before {
    content: "ïŠ‚"
}

.fa-credit-card-alt:before {
    content: "ïŠƒ"
}

.fa-codiepie:before {
    content: "ïŠ„"
}

.fa-modx:before {
    content: "ïŠ…"
}

.fa-fort-awesome:before {
    content: "ïŠ†"
}

.fa-usb:before {
    content: "ïŠ‡"
}

.fa-product-hunt:before {
    content: "ïŠˆ"
}

.fa-mixcloud:before {
    content: "ïŠ‰"
}

.fa-scribd:before {
    content: "ïŠŠ"
}

.fa-pause-circle:before {
    content: "ïŠ‹"
}

.fa-pause-circle-o:before {
    content: "ïŠŒ"
}

.fa-stop-circle:before {
    content: "ïŠ"
}

.fa-stop-circle-o:before {
    content: "ïŠŽ"
}

.fa-shopping-bag:before {
    content: "ïŠ"
}

.fa-shopping-basket:before {
    content: "ïŠ‘"
}

.fa-hashtag:before {
    content: "ïŠ’"
}

.fa-bluetooth:before {
    content: "ïŠ“"
}

.fa-bluetooth-b:before {
    content: "ïŠ”"
}

.fa-percent:before {
    content: "ïŠ•"
}

.fa-gitlab:before {
    content: "ïŠ–"
}

.fa-wpbeginner:before {
    content: "ïŠ—"
}

.fa-wpforms:before {
    content: "ïŠ˜"
}

.fa-envira:before {
    content: "ïŠ™"
}

.fa-universal-access:before {
    content: "ïŠš"
}

.fa-wheelchair-alt:before {
    content: "ïŠ›"
}

.fa-question-circle-o:before {
    content: "ïŠœ"
}

.fa-blind:before {
    content: "ïŠ"
}

.fa-audio-description:before {
    content: "ïŠž"
}

.fa-volume-control-phone:before {
    content: "ïŠ "
}

.fa-braille:before {
    content: "ïŠ¡"
}

.fa-assistive-listening-systems:before {
    content: "ïŠ¢"
}

.fa-asl-interpreting:before,.fa-american-sign-language-interpreting:before {
    content: "ïŠ£"
}

.fa-deafness:before,.fa-hard-of-hearing:before,.fa-deaf:before {
    content: "ïŠ¤"
}

.fa-glide:before {
    content: "ïŠ¥"
}

.fa-glide-g:before {
    content: "ïŠ¦"
}

.fa-signing:before,.fa-sign-language:before {
    content: "ïŠ§"
}

.fa-low-vision:before {
    content: "ïŠ¨"
}

.fa-viadeo:before {
    content: "ïŠ©"
}

.fa-viadeo-square:before {
    content: "ïŠª"
}

.fa-snapchat:before {
    content: "ïŠ«"
}

.fa-snapchat-ghost:before {
    content: "ïŠ¬"
}

.fa-snapchat-square:before {
    content: "ïŠ­"
}

.fa-pied-piper:before {
    content: "ïŠ®"
}

.fa-first-order:before {
    content: "ïŠ°"
}

.fa-yoast:before {
    content: "ïŠ±"
}

.fa-themeisle:before {
    content: "ïŠ²"
}

.fa-google-plus-circle:before,.fa-google-plus-official:before {
    content: "ïŠ³"
}

.fa-fa:before,.fa-font-awesome:before {
    content: "ïŠ´"
}

.fa-handshake-o:before {
    content: "ïŠµ"
}

.fa-envelope-open:before {
    content: "ïŠ¶"
}

.fa-envelope-open-o:before {
    content: "ïŠ·"
}

.fa-linode:before {
    content: "ïŠ¸"
}

.fa-address-book:before {
    content: "ïŠ¹"
}

.fa-address-book-o:before {
    content: "ïŠº"
}

.fa-vcard:before,.fa-address-card:before {
    content: "ïŠ»"
}

.fa-vcard-o:before,.fa-address-card-o:before {
    content: "ïŠ¼"
}

.fa-user-circle:before {
    content: "ïŠ½"
}

.fa-user-circle-o:before {
    content: "ïŠ¾"
}

.fa-user-o:before {
    content: "ï‹€"
}

.fa-id-badge:before {
    content: "ï‹"
}

.fa-drivers-license:before,.fa-id-card:before {
    content: "ï‹‚"
}

.fa-drivers-license-o:before,.fa-id-card-o:before {
    content: "ï‹ƒ"
}

.fa-quora:before {
    content: "ï‹„"
}

.fa-free-code-camp:before {
    content: "ï‹…"
}

.fa-telegram:before {
    content: "ï‹†"
}

.fa-thermometer-4:before,.fa-thermometer:before,.fa-thermometer-full:before {
    content: "ï‹‡"
}

.fa-thermometer-3:before,.fa-thermometer-three-quarters:before {
    content: "ï‹ˆ"
}

.fa-thermometer-2:before,.fa-thermometer-half:before {
    content: "ï‹‰"
}

.fa-thermometer-1:before,.fa-thermometer-quarter:before {
    content: "ï‹Š"
}

.fa-thermometer-0:before,.fa-thermometer-empty:before {
    content: "ï‹‹"
}

.fa-shower:before {
    content: "ï‹Œ"
}

.fa-bathtub:before,.fa-s15:before,.fa-bath:before {
    content: "ï‹"
}

.fa-podcast:before {
    content: "ï‹Ž"
}

.fa-window-maximize:before {
    content: "ï‹"
}

.fa-window-minimize:before {
    content: "ï‹‘"
}

.fa-window-restore:before {
    content: "ï‹’"
}

.fa-times-rectangle:before,.fa-window-close:before {
    content: "ï‹“"
}

.fa-times-rectangle-o:before,.fa-window-close-o:before {
    content: "ï‹”"
}

.fa-bandcamp:before {
    content: "ï‹•"
}

.fa-grav:before {
    content: "ï‹–"
}

.fa-etsy:before {
    content: "ï‹—"
}

.fa-imdb:before {
    content: "ï‹˜"
}

.fa-ravelry:before {
    content: "ï‹™"
}

.fa-eercast:before {
    content: "ï‹š"
}

.fa-microchip:before {
    content: "ï‹›"
}

.fa-snowflake-o:before {
    content: "ï‹œ"
}

.fa-superpowers:before {
    content: "ï‹"
}

.fa-wpexplorer:before {
    content: "ï‹ž"
}

.fa-meetup:before {
    content: "ï‹ "
}

.sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0,0,0,0);
    border: 0
}

.sr-only-focusable:active,.sr-only-focusable:focus {
    position: static;
    width: auto;
    height: auto;
    margin: 0;
    overflow: visible;
    clip: auto
}
	












































</style>
<!-- End checkout custom css -->

<script src="https://bizweb.dktcdn.net/assets/themes_support/libphonenumber-v3.2.30.min.js?1697597694844"></script>

	<script src="https://dist/js/checkout.vendor.min.js?v=11006c9"></script>


	
		<script src="https://dist/js/checkout.min.js?v=a0ee933"></script>
	


<script>
	var Bizweb = Bizweb || {};
	Bizweb.id = '429689';
	Bizweb.store = 'pocomart.mysapo.net';
	
	Bizweb.template = 'checkout';
	Bizweb.Checkout = Bizweb.Checkout || {};
	
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

	
		<script src="https://dist/js/stats.min.js?v=8177d93"></script>
	

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
	<aside>
		<button class="order-summary-toggle" data-toggle="#order-summary" data-toggle-class="order-summary--is-collapsed">
			<span class="wrap">
				<span class="order-summary-toggle__inner">
					<span class="order-summary-toggle__text expandable">
						Đơn hàng (5 sản phẩm)
					</span>
					<span class="order-summary-toggle__total-recap" data-bind="getTextTotalPrice()"></span>
				</span>
			</span>
		</button>
	</aside>
	
	
		
	
	<div id="checkout" class="content">
        
			<input type="hidden" name="_method" value="patch" />
			<div class="wrap">
				<main class="main">
					<header class="main__header">
						<div class="logo logo--left">
	
		<h1 class="shop__name">
			<a href="/">pocomart</a>
		</h1>
	
</div>
          
<form action="{{route('order.add')}}" method="post">
        @csrf     
        <input type="hidden" name="khachhangs" value="{{auth('cus')->user()->id}}">
					</header>
					<div class="main__content">
						<article class="animate-floating-labels row">
							<div class="col col--two">
								<section class="section">
									<div class="section__header">
										<div class="layout-flex">
											<h2 class="section__title layout-flex__item layout-flex__item--stretch">
												<i class="fa fa-id-card-o fa-lg section__title--icon hide-on-desktop"></i>
												
												Thông tin nhận hàng
												
											</h2>
											
												
													<a href="https://account/logout?returnUrl=/checkout/c918b63848ef43c29b8d0dfe1b6e3b51">
														
														<span>Đăng xuất</span>
													</a>
												
											
										</div>
									</div>
									<div class="section__content">
										<div class="fieldset">
                                            
											<div class="field field--show-floating-label">
												<div class="field__input-wrapper">
													<label for="customer-address" class="field__label">Sổ địa chỉ</label>
													<select size="1" class="field__input field__input--select" id="customer-address" data-bind="customerAddress"type="hidden" name="address" >
                                                        @foreach($add as $d)
                                                        <option value="{{$d->id}}"name="address">
                                                            
                                                        - {{$d->name}}
                                                        - {{$d->phone}}
                                                        - {{$d->address}}
                                                        </option>
                                                        
														@endforeach
													</select>
													<div class="field__caret">
														<i class="fa fa-caret-down"></i>
													</div>
												</div>
											</div>
											

											
												
											
											
											
										</div>
									</div>
								</section>
								
								<div class="fieldset">
									<h3 class="visually-hidden">Ghi chú</h3>
									<div class="field " data-bind-class="{'field--show-floating-label': note}">
										<div class="field__input-wrapper">
											<label for="note" class="field__label">
												Ghi chú (tùy chọn)
											</label>
											<textarea name="note" id="note"
													  class="field__input"
													  data-bind="note"></textarea>
										</div>
										
									</div>
								</div>
								
							</div>
							<div class="col col--two">
								

								
									
									
								
								<section class="section" data-define="{shippingMethod: '630819_0,40.000 VND'}">
									<div class="section__header">
										<div class="layout-flex">
											<h2 class="section__title layout-flex__item layout-flex__item--stretch">
												<i class="fa fa-truck fa-lg section__title--icon hide-on-desktop"></i>
												Vận chuyển
											</h2>
										</div>
									</div>
									<div class="section__content" data-tg-refresh="refreshShipping" id="shippingMethodList"
										 data-define="{isAddressSelecting: false, shippingMethods: []}">
										<!-- <div class="alert alert--loader spinner spinner--active" data-bind-show="isLoadingShippingMethod">
											<svg xmlns="http://www.w3.org/2000/svg" class="spinner-loader">
												<use href="#spinner"></use>
											</svg>
										</div> -->

										
										<div class="alert alert-retry alert--danger hide"
											 data-bind-event-click="handleShippingMethodErrorRetry()"
											 data-bind-show="!isLoadingShippingMethod && !isAddressSelecting && isLoadingShippingError">
											<span data-bind="loadingShippingErrorMessage"></span> <i class="fa fa-refresh"></i>
										</div>

										
										<div class="content-box" data-bind-show="!isLoadingShippingMethod && !isAddressSelecting && !isLoadingShippingError">

											
											
											
												
												
													
													
												
											
											<div class="content-box__row" data-define-array="{shippingMethods: {name: '630819_0,40.000 VND', textPrice: '40.000₫', textDiscountPrice: '-', subtotalPriceWithShippingFee: '116.830.000₫'}}">
												<div class="radio-wrapper">
													<div class="radio__input">
														<input type="radio" class="input-radio"
															   name="shippingMethod" id="shippingMethod-630819_0"
															   value="630819_0,40.000 VND"
															   data-bind="shippingMethod" checked>
													</div>
													<label for="shippingMethod-630819_0" class="radio__label">
														<span class="radio__label__primary">
															<span>Giao hàng tận nơi</span>
															
														</span>
														<span class="radio__label__accessory">
															
															<span class="content-box__emphasis price">
																40.000₫
															</span>
															
														</span>
													</label>
												</div>
											</div>
											
										</div>
										
										<div class="alert alert--info hide" data-bind-show="!isLoadingShippingMethod && isAddressSelecting">
											Vui lòng nhập thông tin giao hàng
										</div>
									</div>
								</section>
								
								<section class="section">
									<div class="section__header">
										<div class="layout-flex">
											<h2 class="section__title layout-flex__item layout-flex__item--stretch">
												<i class="fa fa-credit-card fa-lg section__title--icon hide-on-desktop"></i>
												Thanh toán
											</h2>
										</div>
									</div>
									<div class="section__content">
										
										<div class="content-box" data-define="{paymentMethod: undefined}">
											
											
											<div class="content-box__row">
											<div class="radio-wrapper">
													<div class="radio__input">
														<input name="paymentMethod" id="paymentMethod-506732"
															   type="radio" class="input-radio"
															   data-bind="paymentMethod"
															   value="506732"
															   
															   data-provider-id="4"
															   >
													</div>
													<label for="paymentMethod-506732" class="radio__label">
														<span class="radio__label__primary">Thanh toán khi giao hàng (COD)</span>
														<span class="radio__label__accessory">
															<span class="radio__label__icon">
																<i class="payment-icon payment-icon--4"></i>
															</span>
														</span>
																									
													</label>
												</div>
												
												<div class="content-box__row__desc" data-bind-show="paymentMethod == 506732" data-provider-id="4">
													<p>Bạn chỉ phải thanh toán khi nhận được hàng</p>
													
												</div>
												
											</div>
											
										</div>
									</div>
								</section>
							</div>
						</article>
						<div class="field__input-btn-wrapper field__input-btn-wrapper--vertical hide-on-desktop">
							
							
							<a href="/cart" class="previous-link">
								<i class="previous-link__arrow">❮</i>
								<span class="previous-link__content">Quay về giỏ hàng</span>
							</a>
							
						</div>

						<div id="common-alert" data-tg-refresh="refreshError">
							
							
							<div class="alert alert--danger hide-on-desktop"
								 data-bind-show="!isSubmitingCheckout && isSubmitingCheckoutError"
								 data-bind="submitingCheckoutErrorMessage">
							</div>
						</div>
					</div>
					
				</main>
				<aside class="sidebar">
					<div class="sidebar__header">
						<h2 class="sidebar__title">
							Đơn hàng ({{$total_pro}} sản phẩm)
						</h2>
					</div>
					<div class="sidebar__content">
						<div id="order-summary" class="order-summary order-summary--is-collapsed">
							<div class="order-summary__sections">
								<div class="order-summary__section order-summary__section--product-list order-summary__section--is-scrollable order-summary--collapse-element">
									<table class="product-table">
										<caption class="visually-hidden">Chi tiết đơn hàng</caption>
										<thead class="product-table__header">
											<tr>
												<th>
													<span class="visually-hidden">Ảnh sản phẩm</span>
												</th>
												<th>
													<span class="visually-hidden">Mô tả</span>
												</th>
												<th>
													<span class="visually-hidden">Sổ lượng</span>
												</th>
												<th>
													<span class="visually-hidden">Đơn giá</span>
												</th>
											</tr>
										</thead>
										<tbody>
											@foreach($cart as $d)
											<tr class="product">
												<td class="product__image">
													<div class="product-thumbnail">
														<div class="product-thumbnail__wrapper" data-tg-static>
															<img src="/uploads/product/{{$d->pro->image}}" alt="" class="product-thumbnail__image" />
														</div>
														<span class="product-thumbnail__quantity">{{$d->quantity}}</span>
													</div>
												</td>
												<th class="product__description">
													<span class="product__description__name">
														{{$d ->pro-> name}}
													</span>
													
													
												</th>
												<td class="product__quantity visually-hidden"><em>Số lượng:</em> {{$d->quantity}}</td>
												<td class="product__price">
													
                                                    {{number_format($d->price)}}đ
													
												</td>
											</tr>
											@endforeach
											
											
										</tbody>
									</table>
								</div>
								<div class="order-summary__section order-summary__section--discount-code"
									 data-tg-refresh="refreshDiscount" id="discountCode">
									<h3 class="visually-hidden">Mã khuyến mại</h3>
									<div class="edit_checkout animate-floating-labels">
										<div class="fieldset">
											<div class="field ">
												<div class="field__input-btn-wrapper">
													<div class="field__input-wrapper">
														<label for="reductionCode" class="field__label">Nhập mã giảm giá</label>
														<input name="reductionCode" id="reductionCode"
															   type="text" class="field__input"
															   autocomplete="off"
															   data-bind-disabled="isLoadingReductionCode"
															   data-bind-event-keypress="handleReductionCodeKeyPress(event)"
															   
															   data-define="{reductionCode: null}"
															   
															   data-bind="reductionCode">
													</div>
													<button class="field__input-btn btn spinner" type="button"
															data-bind-disabled="isLoadingReductionCode || !reductionCode"
															data-bind-class="{'spinner--active': isLoadingReductionCode, 'btn--disabled': !reductionCode}"
															data-bind-event-click="applyReductionCode()">
														<span class="spinner-label">Áp dụng</span>
														<svg xmlns="http://www.w3.org/2000/svg" class="spinner-loader">
															<use href="#spinner"></use>
														</svg>
													</button>
												</div>
												
												<p class="field__message field__message--error field__message--error-always-show"
												   data-bind-show="!isLoadingReductionCode && isLoadingReductionCodeError"
												   data-bind="loadingReductionCodeErrorMessage">
												</p>
											</div>
											
										</div>
									</div>
								</div>
								<div class="order-summary__section order-summary__section--total-lines order-summary--collapse-element"
									 data-define="{subTotalPriceText: '116.790.000₫'}"
									 data-tg-refresh="refreshOrderTotalPrice" id="orderSummary">
									<table class="total-line-table">
										<caption class="visually-hidden">Tổng giá trị</caption>
										<thead>
											<tr>
												<td><span class="visually-hidden">Mô tả</span></td>
												<td><span class="visually-hidden">Giá tiền</span></td>
											</tr>
										</thead>
										<tbody class="total-line-table__tbody">
											<tr class="total-line total-line--subtotal">
												<th class="total-line__name">
													Tạm tính
												</th>
												<td class="total-line__price">{{number_format($total_price)}}đ</td>
											</tr>
											
											<tr class="total-line total-line--shipping-fee">
												<th class="total-line__name">
													Phí vận chuyển
												</th>
												<td class="total-line__price">
                                                    40,000đ
												</td>
											</tr>
											
										</tbody>
										<tfoot class="total-line-table__footer">
											<tr class="total-line payment-due">
												<th class="total-line__name">
													<span class="payment-due__label-total">
														Tổng cộng
													</span>
												</th>
												<td class="total-line__price">
													<span class="payment-due__price" >{{number_format($total_price+40000)}}đ</span>
												</td>
											</tr>
										</tfoot>
									</table>
								</div>
                                <input type="hidden" name="payment" value ="{{$total_price+40000}}">
								<div class="order-summary__nav field__input-btn-wrapper hide-on-mobile layout-flex--row-reverse">
									<button type="submit" class="btn btn-checkout spinner">
										<span class="spinner-label">ĐẶT HÀNG</span>
										<svg xmlns="http://www.w3.org/2000/svg" class="spinner-loader">
											<use href="#spinner"></use>
										</svg>
									</button>

									
									<a href="/cart" class="previous-link">
										<i class="previous-link__arrow">❮</i>
										<span class="previous-link__content">Quay về giỏ hàng</span>
									</a>
									
								</div>
								<div id="common-alert-sidebar" data-tg-refresh="refreshError">
									
									
									<div class="alert alert--danger hide-on-mobile hide"
										 data-bind-show="!isSubmitingCheckout && isSubmitingCheckoutError"
										 data-bind="submitingCheckoutErrorMessage">
									</div>
								</div>
							</div>
						</div>
					</div>
				</aside>
			</div>
		</form>
		
		
		<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
			<symbol id="spinner">
				<svg viewBox="0 0 30 30">
					<circle stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-dasharray="85%"
							cx="50%" cy="50%" r="40%">
						<animateTransform attributeName="transform"
							type="rotate"
							from="0 15 15"
							to="360 15 15"
							dur="0.7s"
							repeatCount="indefinite" />
					</circle>
				</svg>
			</symbol>
		</svg>
	</div>
</body>
</html>


