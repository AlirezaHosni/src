<style>
    .info-page-cover {
        width: 100%;
        float: right;
        height: 410px;
        background: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url(../images/info-page-cover.jpg) top no-repeat;
        margin-top: 60px;
        text-align: center;
    }

    .info-page-cover .info-page-cover-title {
        margin-top: 50px;
        font: 35px iranyekan;
        color: #fff;
        font-weight: 700;
    }

    .info-page-cover .info-page-search {
        width: 50%;
        height: auto;
        margin: 0 auto;
        margin-top: 30px;
        position: relative;
        display: block;
        text-align: center;
    }

    .info-page-cover .info-page-search .info-page-input-search {
        width: 70%;
        height: 45px;
        float: right;
        border-radius: 7px;
        padding: 0 10px;
        outline: none;
        font: 18px iranyekan;
        margin-bottom: 10px;
    }

    .info-page-cover .info-page-search .info-page-input-search::placeholder {
        text-indent: 0;
    }

    .info-page-cover .info-page-search .btn-info-page-search {
        padding: 9px 55px;
        border-radius: 8px;
        font: 14px iranyekan;
        background: #00bfd6;
        border: 1px solid #148693;
        cursor: pointer;
        color: #fff;
        outline: none;
        transition: all 400ms ease;
    }

    .info-page-cover .info-page-search .btn-info-page-search:hover {
        transition: all 400ms ease;
        background: #05dff9;
    }

    .info-page-faq {
        margin-top: 10%;
        width: 100%;
        height: auto;
        background: #fff;
        float: right;
        position: relative;
        top: -100px;
        border-radius: 7px;
        text-align: center;
        border: 1px solid #dedede;
        box-shadow: 0 12px 12px 0 hsla(0, 0%, 71%, .11);
        padding-bottom: 20px;
        margin-bottom: 20px;
    }

    .info-page-faq .content-info-page {
        border-radius: 8px;
        padding: 0 20px;
        margin: 20px;
    }

    .info-page-faq .content-info-page .box-rounded_headline {
        width: 100%;
        padding-bottom: 10px;
        color: #5f5e5e;
        font: 16px iranyekan;
        text-align: right;
        font-weight: 700;
    }

    .info-page-box-headline {
        background-position: 100%;
        padding: 15px 55px 10px;
    }

    .info-page-faq .content-info-page .info-page_cat {
        width: 100%;
        background: #fff;
        padding: 20px;
        display: block;
        cursor: pointer;
        padding-bottom: 50px;
        float: right;
    }

    .info-page-faq .content-info-page .info-page_cat:hover {
        box-shadow: 0 0 12px 0 hsla(0, 0%, 71%, .46);
        border-radius: 7px;
    }

    .info-page-faq .content-info-page .info-page_cat:before {
        content: "";
        width: 93%;
        position: absolute;
        right: 11px;
        height: 1px;
        background-color: #d3d3d3;
        bottom: 0;
    }

    .info-page-faq .content-info-page .info-page_cat a {
        font: 14px iranyekan;
        color: #4c4b4b;
        font-weight: 700;
        text-decoration: none;
    }

    .info-page-faq .content-info-page .info-page_cat-icon {
        width: 130px;
        height: 130px;
        border-radius: 50%;
        background: #f9f9f9;
        margin: 10px auto 0 auto;
        display: block;
        padding-top: 30px;
        padding-left: 10px;
    }

    .toggle-box {
        width: 100%;
        height: auto;
        background: #fff;
        padding: 20px 25px;
        border-radius: 7px;
        border: 1px solid #d3d3d3;
        float: right;
        margin: 15px 0;
        position: relative;
        overflow: hidden;
    }

    .toggle-box-active > ul > li ul {
        display: none;
        float: right;
        width: 100%;
    }

    .toggle-box-active > ul > li ul li {
        float: right;
        font: 14px iranyekan;
        position: relative;
        width: 100%;
    }

    .toggle-box-active > ul > li ul li a {
        text-decoration: none;
        font: 14px iranyekan;
        color: #5f5f5f;
        margin-top: 10px;
        display: block;
        margin-right: 30px;
        text-align: right;
        margin-bottom: 50px;
    }

    .toggle-box-active > ul > li ul a.info-page-show-more {
        display: block;
        text-align: left;
        font: 14px iranyekan;
        color: #56c7da;
        float: left;
        text-decoration: none;
        margin-bottom: 20px;
    }

    .toggle-box-active > ul > li ul a.info-page-show-more i {
        vertical-align: middle;
        margin-right: 5px;
        font-size: 18px;
    }

    .content-info-page .toggle-box-active > ul > li ul > li.has-sub > a::before {
        content: "";
        width: 10px;
        height: 10px;
        position: absolute;
        right: 0;
        top: 18px;
        border-radius: 50%;
        background: #56c7da;
    }

    .toggle-box-active > ul > li.has-sub > a {
        font: 16px iranyekan;
        color: #5f5f5f;
        display: block;
        text-align: right;
        text-decoration: none;
        cursor: pointer;
        padding-top: 10px;
    }

    .toggle-box-active > ul > li.has-sub > a::after {
        position: absolute;
        content: '';
        width: 2px;
        height: 20px;
        background: #56c7da;
        left: 49px;
        top: 31px;
        -webkit-transition: all .3s;
        -moz-transition: all .3s;
        -ms-transition: all .3s;
        -o-transition: all .3s;
        transition: all .3s;
    }

    .toggle-box-active > ul > li.has-sub > a::before {
        position: absolute;
        content: '';
        width: 20px;
        height: 2px;
        background: #56c7da;
        left: 40px;
        top: 40px;
        -webkit-transition: all .3s;
        -moz-transition: all .3s;
        -ms-transition: all .3s;
        -o-transition: all .3s;
        transition: all .3s;
    }

    .toggle-box-active > ul > li.has-sub.open > a::before {
        transform: rotate(45deg);
        background: #f05662;
    }

    .toggle-box-active > ul > li.has-sub.open > a::after {
        transform: rotate(45deg);
        background: #f05662;
    }

    .question-not-found {
        width: 100%;
        height: auto;
        float: right;
        background: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url(../images/question-not-found.jpg) top no-repeat;
        border-radius: 7px;
        margin-top: -100px;
        margin-bottom: 50px;
    }

    .question-not-found .question-not-found-title {
        display: block;
        font: 35px iranyekan;
        color: #fff;
        text-align: center;
        margin-top: 20px;
        font-weight: 700;
    }

    .question-not-found .info-page_contact-option {
        width: 100%;
        height: auto;
        float: right;
        text-align: center;
        margin-top: 30px;
        position: relative;
        padding: 10px 40px;
        margin-bottom: 20px;
    }

    .info-page_after-faq::after {
        content: "";
        height: calc(100% - 20px);
        position: absolute;
        top: 10px;
        width: 1px;
        background-color: #d3d3d3;
        left: 0;
    }

    .question-not-found .info-page_contact-option i {
        font-size: 70px;
        color: #fff;
        display: block;
    }

    .question-not-found .info-page_contact-option span {
        font: 16px iranyekan;
        color: #fff;
        font-weight: 700;
        margin-right: 10px;
    }

    .question-not-found .info-page_contact-option .faq-send-message {
        padding: 6px 40px;
        color: #fff;
        text-decoration: none;
        background: #00bfd6;
        border: 1px solid #148693;
        font: 14px iranyekan;
        border-radius: 8px;
        font-weight: 700;
    }

    .info-page-box-headline-question {
        background-image: url(../images/page-faq/question.svg);
        background-repeat: no-repeat;
    }

    .info-page-faq .content-info-page .box-rounded-content {
        padding: 0 50px;
        font: 14px iranyekan;
        line-height: 2.57;
        color: #4a4a4a;
    }

    .info-page-faq .content-info-page .box-rounded-content .content-expert-articles video {
        max-width: 100%;
    }

    .info-page-faq .content-info-page .box-rounded-content .content-expert-articles .content-expert-text {
        line-height: 2.53;
        color: #404040;
        font: 16px iranyekan;
        text-align: right;
    }

    .info-page-faq .content-info-page .box-rounded-content .content-expert-articles .content-expert-text .content-expert-img {
        text-align: center;
        position: relative;
        margin-top: 40px;
        margin-bottom: 48px;
    }

    .info-page-faq .content-info-page .box-rounded-content .content-expert-articles .content-expert-text .content-expert-img img {
        max-width: 100%;
    }

    .content-expert-feedback {
        width: 100%;
        border: 1px solid #b8b8b8;
        border-radius: 4px;
        padding: 24px;
        font: 16px iranyekan;
        text-align: right;
    }

    .content-expert-feedback .content-expert-feedback-state .js-feedback-state-btn {
        min-width: 96px;
        border-radius: 8px;
        border: 1px solid #555;
        background: #fff;
        padding: 10px 20px;
        color: #555;
        margin-right: 24px;
        outline: none;
        cursor: pointer;
    }
    .text-subtitle-strong{
        font-size: 1.9rem;
        font-weight: 700;
        line-height: 2.12;
    }
    @media only screen and (max-width: 480px){
        .info-page-faq{
            margin-top: 30%;
        }
    }

</style>

