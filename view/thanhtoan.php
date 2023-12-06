<div >
<div class="success-animation">
<svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" /><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" /></svg>
 <div class=" container mt-4">
    <h2>Lời cảm ơn</h2>
    <p class="lh-1 font-20 mt-4">Chào các khách hàng thân yêu của chúng tôi,
    Tôi muốn gửi lời cảm ơn chân thành nhất tới bạn vì đã ủng hộ và tin tưởng vào cửa hàng của chúng tôi. Không có gì quý bằng sự ủng hộ từ các bạn, và chúng tôi rất biết ơn vì đã có cơ hội phục vụ bạn.
    Mỗi sản phẩm mà chúng tôi tạo ra và mỗi dịch vụ mà chúng tôi cung cấp đều được tạo ra với tâm huyết và mong muốn mang lại trải nghiệm tốt nhất cho bạn. Sự hài lòng của bạn là động lực lớn giúp chúng tôi không ngừng hoàn thiện và cải tiến.
    Chúng tôi cam kết tiếp tục cung cấp những sản phẩm chất lượng, mẫu mã đa dạng và dịch vụ tận tâm nhất. Hãy luôn cảm thấy tự tin và đẹp hơn mỗi khi mặc những bộ trang phục từ cửa hàng của chúng tôi.
    Một lần nữa, xin chân thành cảm ơn bạn vì đã là một phần không thể thiếu của hành trình phát triển của chúng tôi. Hãy tiếp tục ủng hộ và chia sẻ niềm vui với chúng tôi trong tương lai.</p>
    <a href="index.php?act=shop" class="mt-4"><h5>Hãy quay trở lại cửa hàng của chúng tôi để có thể mua sắm nhiều hơn</h5></a>
 </div>
</div>
</div>
<style>
.success-animation { margin:150px auto;}

.checkmark {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    display: block;
    stroke-width: 2;
    stroke: #4bb71b;
    stroke-miterlimit: 10;
    box-shadow: inset 0px 0px 0px #4bb71b;
    animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both;
    position:relative;
    top: 5px;
    right: 5px;
   margin: 0 auto;
}
.checkmark__circle {
    stroke-dasharray: 166;
    stroke-dashoffset: 166;
    stroke-width: 2;
    stroke-miterlimit: 10;
    stroke: #4bb71b;
    fill: #fff;
    animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;
 
}

.checkmark__check {
    transform-origin: 50% 50%;
    stroke-dasharray: 48;
    stroke-dashoffset: 48;
    animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards;
}

@keyframes stroke {
    100% {
        stroke-dashoffset: 0;
    }
}

@keyframes scale {
    0%, 100% {
        transform: none;
    }

    50% {
        transform: scale3d(1.1, 1.1, 1);
    }
}

@keyframes fill {
    100% {
        box-shadow: inset 0px 0px 0px 30px #4bb71b;
    }
}
</style>