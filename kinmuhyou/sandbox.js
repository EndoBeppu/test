/**
 *
 */
 const form = document.querySelector('.signup-form');
const feedback = document.querySelector('.feedback');
const feedback2 = document.querySelector('.feedback2');
const feedback3 = document.querySelector('.feedback3');
const feedback4 = document.querySelector('.feedback4');
const feedback5 = document.querySelector('.feedback5');
const feedback6 = document.querySelector('.feedback6');
const feedback7 = document.querySelector('.feedback7');
const feedback8 = document.querySelector('.feedback8');

const usernamePattern =/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/;

form.addEventListener('submit', e => {
    e.preventDefault();


const username  = form.username.value;
const username2 = form.username2.value;
const username3 = form.username3.value;
const username4 = form.username4.value;
const email     = form.email.value;
const nyuusha   = form.nyuusha.value;
const taishoku  = form.taishoku.value;
const yuukyuu   = form.yuukyuu.value;

//有給残日数の処理
if(yuukyuu) {
       feedback8.textContent = '';
    } else {
       feedback8.textContent = '※有給残日数を入力してください。';
    }

//退職日の処理
if(taishoku ) {
       feedback7.textContent = '';
    } else {
       feedback7.textContent = '※退職日を入力してください。';
    }
//入社日の処理
if(nyuusha) {
       feedback6.textContent = '';
    } else {
       feedback6.textContent = '※入社日を入力してください。';
    }
//メールアドレスの処理
if(usernamePattern.test(email)) {
       feedback5.textContent = '';
    } else {
       feedback5.textContent = '※メールアドレスを入力してください。';
    }
//名(カナ)の処理
if(username4) {
        feedback4.textContent = '';
    } else {
        feedback4.textContent = '※名(カナ)を入力してください。';
    }
//姓の処理
    if(username) {
        feedback.textContent = '';
    } else {
        feedback.textContent = '※姓を入力してください。';
    }
//名の処理
	if(username2) {
        feedback2.textContent = '';
    } else {
        feedback2.textContent = '※名を入力してください。';
    }
//姓(カナ)の処理
if(username3) {
        feedback3.textContent = '';
    } else {
        feedback3.textContent = '※姓(カナ)を入力してください。';
    }

});





// user エリアの外枠を装飾する
form.username.addEventListener('keyup', e => {
    if(e.target.value){
        form.username.setAttribute('class', 'success');
    }else{
        form.username.setAttribute('class', 'error');
    }


});

function kakunin(){
  ret = confirm("社員情報が変更されていません。社員一覧へ戻りますか?");

  if (ret == true){
    location.pathname = "kinmuhyou/index.php";
  }
}










