function addAcc() {

    var smImg ="";
    var smName = document.getElementById("smUser").value;
    var smValue = document.getElementById("smSelect").value;
    var x = document.getElementById("smSelect").selectedIndex;

    if (smValue == "sm_1"){
        smImg = "r-1.png";
        //"Behance";
    }
    if (smValue == "sm_2"){
        smImg = "r-2.png";
        //"Ello";
    }
    if (smValue == "sm_3"){
        smImg = "r-3.png";
        //"Facebook";
    }
    if (smValue == "sm_4"){
        smImg = "r-4.png";
        //"Instagram";
    }
    if (smValue == "sm_5"){
        smImg = "r-5.png";
        //"Linkedin";
    }
    if (smValue == "sm_6"){
        smImg = "r-6.png";
        //"Onlyfans";
    }
    if (smValue == "sm_7"){
        smImg = "r-7.png";
        //"Pinterest";
    }
    if (smValue == "sm_8"){
        smImg = "r-8.png";
        //"QQ";
    }
    if (smValue == "sm_9"){
        smImg = "r-9.png";
        //"Qzone";
    }
    if (smValue == "sm_10"){
        smImg = "r-10.png";
        //"reddit";
    }
    if (smValue == "sm_11"){
        smImg = "r-11.png";
        //"snapchat";
    }
    if (smValue == "sm_12"){
        smImg = "r-12.png";
        //"Telegram";
    }
    if (smValue == "sm_13"){
        smImg = "r-13.png";
        //"Tiktok";
    }
    if (smValue == "sm_14"){
        smImg = "r-14.png";
        //"Tumblr";
    }
    if (smValue == "sm_15"){
        smImg = "r-15.png";
        //"Twitter";
    }
    if (smValue == "sm_16"){
        smImg = "r-16.png";
        //"twitch";
    }
    if (smValue == "sm_17"){
        smImg = "r-17.png";
        //"Vimeo";
    }
    if (smValue == "sm_18"){
        smImg = "r-18.png";
        //"wechat";
    }
    if (smValue == "sm_19"){
        smImg = "r-19.png";
        //"weibo";
    }
    if (smValue == "sm_20"){
        smImg = "r-20.png";
        //"Youtube";
    }
    const child = document.getElementById("accounts");
    let html = "<div id='"+smValue+"' class='col-lg-6'>  <div class='row mb-3'> <div class='col-md-auto'> <div> <a style='cursor:pointer' onclick='removeAcc(\""+smValue+"\")' ><img src='img/remove-acc.png' alt='Remove'></a> </div>  </div> <div class='col-md-auto my-profile-logo-sm-align'> <img src='img/"+smImg+"' > </div> <div class='col input-sm-align'> <input class='input-redes' type='text' name='ciudad' id='ciudad' placeholder='new' value='"+smName+"'> </div> </div> </div> ";
    child.insertAdjacentHTML("beforeend", html);
    document.getElementById("smSelect").options[x].disabled = true;
    //Clear the input field "User" and set the select to the first position

    document.getElementById("smUser").value = '';
    document.getElementById('btn-add-smUser').disabled = true;
    document.getElementById("smSelect").selectedIndex = 0;
}


function addTopic(selected) {
    var text = selected.options[selected.selectedIndex].text;
    var value = document.getElementById("topicSelect").value;
    var x = document.getElementById("topicSelect").selectedIndex;
    const child = document.getElementById("topics");
    let html = " <div id='"+value+"' class='col-lg-3'> <div class='row mb-3'> <div class='col-md-auto my-profile-width-remove'> <div> <a style='cursor:pointer' onclick='removeAcc(\""+value+"\")' ><img src='img/remove-acc.png' alt='Remove'></a> </div> </div> <div class='col-md-auto user-decription-black my-profile-align-txt-content'>"+text+"</div> </div> </div> ";
    child.insertAdjacentHTML("beforeend", html);
    document.getElementById("topicSelect").options[x].disabled = true;
}


function addLanguage() {
    var value = document.getElementById("langSelect").value;
    var x = document.getElementById("langSelect").selectedIndex;
    var selected = document.getElementById("langSelect");
    var text = selected.options[selected.selectedIndex].text;
    const child = document.getElementById("languages");
    let html = " <div id='"+value+"' class='col-lg-3'> <div class='row mb-3'> <div class='col-md-auto my-profile-width-remove'> <div> <a style='cursor:pointer' onclick='removeAcc(\""+value+"\")' ><img src='img/remove-acc.png' alt='Remove'></a> </div> </div> <div class='col-md-auto user-decription-black my-profile-align-txt-content'>"+text+"</div> </div> </div> ";
    child.insertAdjacentHTML("beforeend", html);
    document.getElementById("langSelect").options[x].disabled = true;
    //document.getElementById("langSelect").selectedIndex = 0;
    document.getElementById('btn-lang').disabled = true;

}


function addLanguageSearch() {
    var value = document.getElementById("langSelect").value;
    var x = document.getElementById("langSelect").selectedIndex;
    var selected = document.getElementById("langSelect");
    var text = selected.options[selected.selectedIndex].text;
    const child = document.getElementById("languages");
    let html = " <div id='"+value+"' class='col-md-auto'> <div class='row mb-3'> <div class='col-md-auto my-profile-width-remove' style='width: 55px;'> <div> <a style='cursor:pointer' onclick='removeAcc(\""+value+"\")' ><img style='width: 100%;' src='img/remove-acc.png' alt='Remove'></a> </div> </div> <div class='col-md-auto user-decription-black my-profile-align-txt-content' style='font-size: 14px;'>"+text+"</div> </div> </div> ";
    child.insertAdjacentHTML("beforeend", html);
    document.getElementById("langSelect").options[x].disabled = true;
    //document.getElementById("langSelect").selectedIndex = 0;
    document.getElementById('btn-lang').disabled = true;
}


function addExperience() {
    for (var i = 0; i < 200; i++) {
        if (!document.getElementById("exp_"+i)) {
            var exp = document.getElementById("input-exp").value;
            const child = document.getElementById("experience");
            let html = " <div id='exp_"+i+"' class='col-lg-3'> <div class='row mb-3'> <div class='col-md-auto my-profile-width-remove'> <div> <a style='cursor:pointer' onclick='removeAcc(\"exp_"+i+"\")' ><img src='img/remove-acc.png' alt='Remove'></a> </div> </div> <div class='col-md-auto user-decription-black my-profile-align-txt-content'>"+exp+"</div> </div> </div> ";
            child.insertAdjacentHTML("beforeend", html);
            document.getElementById("input-exp").value = '';
            document.getElementById('btn-add-exp').disabled = true; 
            break;
        }
    } 
}


function success() {
     if(document.getElementById("input-exp").value==="") { 
            document.getElementById('btn-add-exp').disabled = true; 
        } else { 
            document.getElementById('btn-add-exp').disabled = false;
        }
    }


function successSm() {
    
     if((document.getElementById("smSelect").selectedIndex === 0) || (document.getElementById("smUser").value==="")) { 
            document.getElementById('btn-add-smUser').disabled = true; 
        } else {           
            document.getElementById('btn-add-smUser').disabled = false;
        }
    }


function successLang() {
    
     if(document.getElementById("langSelect").selectedIndex === 0 ) { 
            document.getElementById('btn-lang').disabled = true; 
        } else {           
            document.getElementById('btn-lang').disabled = false;
        }
    }



function removeAcc(value) {
    const myArray = value.split("_");
    if (myArray[0] == "t") {
        document.getElementById("topicSelect").options[myArray[1]].disabled = false;
    }
    if (myArray[0] == "sm") {
        document.getElementById("smSelect").options[myArray[1]].disabled = false;
    }
    if (myArray[0] == "lang") {
        document.getElementById("langSelect").options[myArray[1]].disabled = false;
    }

    const element = document.getElementById(value);
    element.remove();
}


function removeEmail() {
var aObj=document.getElementsByTagName('tbody')[0].getElementsByTagName('tr');
var i=aObj.length; 
var unchecked = [];
while(i--) {
    var box =aObj[i].getElementsByTagName('input')[0]; 
    if(box.checked) {
        aObj[i].parentNode.removeChild(aObj[i]);
        }
    else {
        unchecked.push(box.value);
        }
    }
//alert(unchecked);
}



function backMessageList() {
    document.getElementById("myTabMessage").style.display = "none";
    document.getElementById("myTabListMessage").style.display = "Block";
}

function viewMessage() {
    
    document.getElementById("myTabMessage").style.display = "block";
    document.getElementById("myTabListMessage").style.display = "none";

}

function onload(event) {
     
    //Disable all options in the "smSelect", which are already in use
    for (var i = 0; i < 20; i++) {
        if (document.getElementById("sm_"+i)) {
            document.getElementById("smSelect").options[i].disabled = true;
        } 
    }
    //Disable all options in the "topicSelect", which are already in use
    for (var i = 0; i < 33; i++) {
        if (document.getElementById("t_"+i)) {
            document.getElementById("topicSelect").options[i].disabled = true;
        } 
    }
    //Disable all options in the "langSelect", which are already in use
    for (var i = 0; i < 33; i++) {
        if (document.getElementById("lang_"+i)) {
            document.getElementById("langSelect").options[i].disabled = true;
        } 
    }
    /*
    let num = Math.floor(Math.random() * 10) + 1;
    $('div#tagcloud a').attr("rel",num);*/
}



window.addEventListener("load", onload, false); 

// Tag Cloud Mi Perfil
$('#tagcloud a').tagcloud();
$('#tagcloud a').tagcloud({
    size: {
      start: 12,
      end: 30,
      unit: "px"
    },
    color: {
      start: '#606060',
      end: '#000000'
    }
  });