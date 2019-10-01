function toggleSidebar(){
    document.getElementById("sidebar").classList.toggle('active');
}

function createUser(){
document.getElementById("userform").style.visibility="visible";
}
function home(){
document.getElementById("userform").style.visibility="hidden";
document.getElementById("quiz").style.visibility="hidden";
document.getElementById("table").style.visibility="visible";

}
function quiz(){
document.getElementById("quiz").style.visibility="visible";
document.getElementById("table").style.visibility="hidden";
alert("Scroll down to try the quiz!");
}
        
    //play audio functions
function playa(){
var audio = document.getElementById("a");
audio.play();
 }

 function playi(){
     var audio= document.getElementById("i");
     audio.play();
 }
 function playu(){
    var audio= document.getElementById("u");
    audio.play();
}
function playe(){
    var audio= document.getElementById("e");
    audio.play();
}
function playo(){
    var audio= document.getElementById("o");
    audio.play();
}
//k
function playka(){
    var audio = document.getElementById("ka");
    audio.play();
     }
    
     function playki(){
         var audio= document.getElementById("ki");
         audio.play();
     }
     function playku(){
        var audio= document.getElementById("ku");
        audio.play();
    }
    function playke(){
        var audio= document.getElementById("ke");
        audio.play();
    }
    function playko(){
        var audio= document.getElementById("ko");
        audio.play();
    }
//s
function playsa(){
    var audio = document.getElementById("sa");
    audio.play();
     }
    
     function playsi(){
         var audio= document.getElementById("si");
         audio.play();
     }
     function playsu(){
        var audio= document.getElementById("su");
        audio.play();
    }
    function playse(){
        var audio= document.getElementById("se");
        audio.play();
    }
    function playso(){
        var audio= document.getElementById("so");
        audio.play();
    }
//t
function playta(){
    var audio = document.getElementById("ta");
    audio.play();
     }
    
     function playti(){
         var audio= document.getElementById("ti");
         audio.play();
     }
     function playtu(){
        var audio= document.getElementById("tu");
        audio.play();
    }
    function playte(){
        var audio= document.getElementById("te");
        audio.play();
    }
    function playto(){
        var audio= document.getElementById("to");
        audio.play();
    }
 //n
function playna(){
    var audio = document.getElementById("na");
    audio.play();
     }
    
     function playni(){
         var audio= document.getElementById("ni");
         audio.play();
     }
     function playnu(){
        var audio= document.getElementById("nu");
        audio.play();
    }
    function playne(){
        var audio= document.getElementById("ne");
        audio.play();
    }
    function playno(){
        var audio= document.getElementById("no");
        audio.play();
    }
//h
function playha(){
    var audio = document.getElementById("ha");
    audio.play();
     }
    
     function playhi(){
         var audio= document.getElementById("hi");
         audio.play();
     }
     function playhu(){
        var audio= document.getElementById("hu");
        audio.play();
    }
    function playhe(){
        var audio= document.getElementById("he");
        audio.play();
    }
    function playho(){
        var audio= document.getElementById("ho");
        audio.play();
    }
//m
function playma(){
    var audio = document.getElementById("ma");
    audio.play();
     }
    
     function playmi(){
         var audio= document.getElementById("mi");
         audio.play();
     }
     function playmu(){
        var audio= document.getElementById("mu");
        audio.play();
    }
    function playme(){
        var audio= document.getElementById("me");
        audio.play();
    }
    function playmo(){
        var audio= document.getElementById("mo");
        audio.play();
    }
//m
function playya(){
    var audio = document.getElementById("ya");
    audio.play();
     }
     function playyu(){
        var audio= document.getElementById("yu");
        audio.play();
    }
    function playyo(){
        var audio= document.getElementById("yo");
        audio.play();
    }
//m
function playra(){
    var audio = document.getElementById("ra");
    audio.play();
     }
    
     function playri(){
         var audio= document.getElementById("ri");
         audio.play();
     }
     function playru(){
        var audio= document.getElementById("ru");
        audio.play();
    }
    function playre(){
        var audio= document.getElementById("re");
        audio.play();
    }
    function playro(){
        var audio= document.getElementById("ro");
        audio.play();
    }
//m
function playwa(){
    var audio = document.getElementById("wa");
    audio.play();
     }
    
     function playwi(){
         var audio= document.getElementById("wi");
         audio.play();
     }
    function playwe(){
        var audio= document.getElementById("we");
        audio.play();
    }
    function playwo(){
        var audio= document.getElementById("wo");
        audio.play();
    }
//n
function playn(){
    var audio= document.getElementById("n");
    audio.play();
}

//quiz js


function submitQuiz() {
    console.log('submitted');

// get each answer score
    function answerScore (qName) {
        var radiosNo = document.getElementsByName(qName);

        for (var i = 0, length = radiosNo.length; i < length; i++) {
               if (radiosNo[i].checked) {
        // do something with radiosNo
                var answerValue = Number(radiosNo[i].value);
            }
        }
        // change NaNs to zero
        if (isNaN(answerValue)) {
            answerValue = 0;
        }
        return answerValue;
    }

// calc score with answerScore function
    var calcScore = (answerScore('q1') + answerScore('q2') + answerScore('q3') + answerScore('q4')+answerScore('q5') + answerScore('q6') + answerScore('q7') + answerScore('q8')+answerScore('q9') + answerScore('q10'));
    console.log("CalcScore: " + calcScore); // it works!

// function to return correct answer string
    function correctAnswer (correctStringNo, qNumber) {
        console.log("qNumber: " + qNumber);  // logs 1,2,3,4 after called below
        return ("The correct answer for question #" + qNumber + ": &nbsp;<strong>" +
            (document.getElementById(correctStringNo).innerHTML) + "</strong>");
        }

// print correct answers only if wrong (calls correctAnswer function)
    if (answerScore('q1') === 0) {
        document.getElementById('correctAnswer1').innerHTML = correctAnswer('correctString1', 1);
    }
    if (answerScore('q2') === 0) {
        document.getElementById('correctAnswer2').innerHTML = correctAnswer('correctString2', 2);
    }
    if (answerScore('q3') === 0) {
        document.getElementById('correctAnswer3').innerHTML = correctAnswer('correctString3', 3);
    }
    if (answerScore('q4') === 0) {
        document.getElementById('correctAnswer4').innerHTML = correctAnswer('correctString4', 4);
    }
    if (answerScore('q5') === 0) {
        document.getElementById('correctAnswer1').innerHTML = correctAnswer('correctString5', 5);
    }
    if (answerScore('q6') === 0) {
        document.getElementById('correctAnswer2').innerHTML = correctAnswer('correctString6', 6);
    }
    if (answerScore('q7') === 0) {
        document.getElementById('correctAnswer3').innerHTML = correctAnswer('correctString7', 7);
    }
    if (answerScore('q8') === 0) {
        document.getElementById('correctAnswer4').innerHTML = correctAnswer('correctString8', 8);
    }
    if (answerScore('q9') === 0) {
        document.getElementById('correctAnswer1').innerHTML = correctAnswer('correctString9', 9);
    }
    if (answerScore('q10') === 0) {
        document.getElementById('correctAnswer2').innerHTML = correctAnswer('correctString10', 10);
    }
    

// calculate "possible score" integer
    var questionCountArray = document.getElementsByClassName('question');

    var questionCounter = 0;
    for (var i = 0, length = questionCountArray.length; i < length; i++) {
        questionCounter++;
    }

// show score as "score/possible score"
    var showScore = "Your Score: " + calcScore +"/" + questionCounter;
// if 10/10, "perfect score!"
    if (calcScore === questionCounter) {
        showScore = showScore + "&nbsp; <strong>Perfect Score!</strong>"
    };
    document.getElementById('userScore').innerHTML = showScore;
}

 $(document).ready(function() {

 $('#submitButton').click(function() {
     $(this).addClass('hide');
     //console.log("Score is diplayed in left corner (Can be hidden  by sidebar//fixed)");
})

});
