$.ajax({
    url: "http://localhost:2222/",
    crossdomain: true,
    success: function(response){
        var csData = response["kea-it-degrees"].find(x => x.id == "CS");
        var sdData = response["kea-it-degrees"].find(x => x.id == "SD");
        var wdData = response["kea-it-degrees"].find(x => x.id == "WD");
        var itsData = response["kea-it-degrees"].find(x => x.id == "ITS");

        //Description of ITS
        $("#ITS > section > p").text(itsData["description"]);

        //First semester ITS
        for(let i=0; i < 4; i++){
            $("#ITS").children(".semester").eq(0).children(".subject").eq(i).children("header").text(itsData["semesters"][0]["subjects"][i]["name"]);
            $("#ITS").children(".semester").eq(0).children(".subject").eq(i).children("main").text(itsData["semesters"][0]["subjects"][i]["description"]);
        }

        //Second semester ITS
        for(let i=0; i < 3; i++){
            $("#ITS").children(".semester").eq(1).children(".subject").eq(i).children("header").text(itsData["semesters"][1]["subjects"][i]["name"]);
            $("#ITS").children(".semester").eq(1).children(".subject").eq(i).children("main").text(itsData["semesters"][1]["subjects"][i]["description"]);
        }

        //Second semester ITS
        for(let i=0; i < 2; i++){
            $("#ITS").children(".semester").eq(2).children(".subject").eq(i).children("header").text(itsData["semesters"][2]["subjects"][i]["name"]);
            $("#ITS").children(".semester").eq(2).children(".subject").eq(i).children("main").text(itsData["semesters"][2]["subjects"][i]["description"]);
        }

        //Description of WD
        $("#WD > section > p").text(wdData["description"]);

        //First semester WD
        for(let i=0; i < 3; i++){
            $("#WD").children(".semester").eq(0).children(".subject").eq(i).children("header").text(wdData["semesters"][0]["subjects"][i]["name"]);
            $("#WD").children(".semester").eq(0).children(".subject").eq(i).children("main").text(wdData["semesters"][0]["subjects"][i]["description"]);
        }

        //Second semester WD
        for(let i=0; i < 2; i++){
            $("#WD").children(".semester").eq(1).children(".subject").eq(i).children("header").text(wdData["semesters"][1]["subjects"][i]["name"]);
            $("#WD").children(".semester").eq(1).children(".subject").eq(i).children("main").text(wdData["semesters"][1]["subjects"][i]["description"]);
        }

        //Third semester WD
        for(let i=0; i < 2; i++){
            $("#WD").children(".semester").eq(2).children(".subject").eq(i).children("header").text(wdData["semesters"][2]["subjects"][i]["name"]);
            $("#WD").children(".semester").eq(2).children(".subject").eq(i).children("main").text(wdData["semesters"][2]["subjects"][i]["description"]);
        }

    }
});


$("#aAP").hover(function(){
    $("#APMenu").css("display", "block");
}, function(){
    setTimeout(function(){
        $("#APMenu").css("display", "none");
    }, 2000)
});

$("#aPBA").hover(function(){
    $("#PBAMenu").css("display", "block");
}, function(){
    setTimeout(function(){
        $("#PBAMenu").css("display", "none");
    }, 2000)
});

$("#aCS").click(function(e){
    $("#CS").css("display", "block");
    $("article:not(#CS):not(#Home):not(.subject)").css("display", "none");
    $("#Home").css("display", "none");
});

$("#aSD").click(function(e){
    $("#SD").css("display", "block");
    $("article:not(#SD):not(#Home):not(.subject)").css("display", "none");
    $("#Home").css("display", "none");
});

$("#aWD").click(function(e){
    $("#WD").css("display", "block");
    $("article:not(#WD):not(#Home):not(.subject)").css("display", "none");
    $("#Home").css("display", "none");
});

$("#aITS").click(function(e){
    $("#ITS").css("display", "block");
    $("article:not(#ITS):not(#Home):not(.subject)").css("display", "none");
    $("#Home").css("display", "none");
});

$("#aHome").click(function(e){
    $("#Home").css("display", "block");
    $("article:not(#Home):not(.subject)").css("display", "none");
});