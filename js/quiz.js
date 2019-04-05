var Quest = new Array(10);  //this sets up an array for all of the answers that are given

function populate() {
// alert("function populate started");
// this function gives each of the answers 0 points so if someone doesn't answer a question
// the whole thing will continue to work
  for(var i=0; i<10; i++) { Quest[i]=0; }
}

function total() {
// alert("function total started");
// this function adds the number of points each answer is worth together
  myScore=0;
  for (var i=0; i<10; i++) { myScore=myScore+Quest[i]; }
  analyzer(myScore);
}
myContents = new Array();
myContents[0] = "Others see you as someone they should handle with care You\'re seen as vain, self centered,"
 + " and who is extremely dominant. Others may admire you, wishing they could be more like you, but don\'t always trust you,"
 + " hesitating to become too deeply involved with you.";
myContents[1] = "Others see you as an exciting, highly volatile, rather impulsive personality; a natural leader,"
 + " who\'s quick to make decisions, though not always the right ones. They see you as bold and adventuresome,"
 + " someone who will try anything once; someone who takes chances and enjoys an adventure."
 + " They enjoy being in your company because of the excitement you radiate.";
myContents[2] = "Others see you as fresh, lively, charming, amuzing, practical, and always interesting;"
 + " someone who\'s constantly in the center of attention, but sufficiently well balanced not to let it go their head."
 + " They also see you as kind, considerate, and understanding; someone who will always cheer them up and help them out.";
myContents[3] = "Others see you as sensible, cautious, careful and practical. They see you as clever, gifted,"
 + " or talented, but modest...Not a person who makes friends too quickly or easily, but someone who\'s extremely loyal"
 + " to friends you do make and who expect the same loyalty in return. Those who really get to know you realize"
 + " it takes a lot to shake your trust in yoru friends, but eqally that it takes you a long time to get over it"
 + " if that trust is ever broken.";
myContents[4] = "Your friends see you as painstaking and fussy. They see you as very cautious, extremely careful,"
 + " a slow and steay plodder. It would really suprise them if you ever did something impulsively or on the spur"
 + " of the moment, expecting you to examine everything carefully from every angle and then, usally against it."
 + " They think this reaction is caused partly by your careful nature.";
myContents[5] = "People think you are shy, nervous, and indecisive, someone who needs looking after,"
 + " who always wants someone else to make the decisions and who does not want to get involved with anyone or anything."
 + " They see you as a worrier who always sees problems that dont exist. SOme people think you are boring."
 + " Only those who know you well know that you are not."

function analyzer (myScore) {
// this function uses the total calculated score to figure out which personality type they are
  if (myScore>60) { myContentsPtr = 0; }
  else { if (myScore > 50) { myContentsPtr = 1; }
    else { if(myScore>40)  { myContentsPtr = 2; }
      else { if(myScore>30) { myContentsPtr = 3; }
        else { if(myScore>20) { myContentsPtr = 4; }
          else { myContentsPtr = 5; }
        }
      }
    }
  }
  myDisplay(myContents[myContentsPtr])
}

function myDisplay(myContents) {
//This function will open a new window and show the results calculated
  alert(myContents);
}

function saver(q, points) {
// this function puts the points that each answer is worth into the array
  q=q-1;
  Quest[q]=points
}
