<style>
    strong {
        font-size: 30px;
    }
    span {
        font-size: 25px
    }
    p{
        font-size: 12px;
        line-height:1.6;
    }
</style>
<strong>Name : </strong> <span>{{ Session::get('name-con') }}</span><br />
<strong>Email : </strong> <span>{{ Session::get('email-con') }}</span><br />
<strong>Subject : </strong> <span>{{ Session::get('subject-con') }}</span><br />
<p>{{ Session::get('msg-con') }}</p>