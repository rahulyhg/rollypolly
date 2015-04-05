function Repository(f) {
    if (!$("#" + f)) {
        return false
    }
    var d = f;
    var g = "_repository_";
    var c = function(j) {
        var l = localStorage.getItem(j);
        var k = l ? l.split(/,/) : new Array();
        return {
            add: function(m) {
                k.push(m);
                localStorage.setItem(j, k.join(","))
            },
            remove: function(m) {
                k.splice(m, 1);
                localStorage.setItem(j, k.join(","))
            },
            clear: function() {
                k = null;
                l(j, null)
            },
            items: function() {
                return k
            }
        }
    };

    function h(n) {
        var l = new c("chessonline_repo");
        var m = l.items();
        var j = "";
        for (var k = 0; k < m.length; k++) {
            j = m[k].split("|");
            if (j[0] == n) {
                l.remove(k)
            }
        }
        b()
    }

    function e(j) {
        for (var k = 0; k < j.length; k++) {
            if (j[k] == "false") {
                j[k] = false
            }
        }
        return j
    }

    function i() {
        var j = objMainboard.GetGame();
        var k = new c("chessonline_repo");
        k.add(j);
        b()
    }

    function a(n) {
        var l = new c("chessonline_repo");
        var m = l.items();
        var j = "";
        for (var k = 0; k < m.length; k++) {
            j = m[k].split("|");
            if (j[0] == n) {
                objMainboard.LoadGame(m[k])
            }
        }
    }

    function b() {
        var m = new Array("01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12");
        var q = new Date();
        var o = new c("chessonline_repo");
        var j = o.items();
        if (j.length > 0) {
            var t = "";
            var r = "";
            var s = "";
            var n = "";
            var l = "";
            var p = "";
            $("#" + d + g + "repository").html("");
            for (var k = 0; k < j.length; k++) {
                t = j[k].split("|");
                q = new Date(Math.floor(t[0]));
                s = (q.getDate() <= 9) ? "0" : "";
                n = (q.getHours() <= 9) ? "0" : "";
                l = (q.getMinutes() <= 9) ? "0" : "";
                p = (q.getSeconds() <= 9) ? "0" : "";
                $("#" + d + g + "repository").append("<li>" + s + q.getDate() + "." + m[q.getMonth()] + "." + q.getFullYear() + " " + n + q.getHours() + ":" + l + q.getMinutes() + ":" + p + q.getSeconds() + ' <button id="' + d + g + "loadgame_" + t[0] + '" class="' + d + g + 'load">Load</button> <button id="' + d + g + "removegame_" + t[0] + '" class="' + d + g + 'remove">Remove</button></li>')
            }
        } else {
            $("#" + d + g + "repository").html("No games found")
        }
    }
    this.Create = function() {
        var j = "";
        j = j + '<div class="repository_panel">';
        j = j + '<!--<input type="text" name="name" id="rname" value="" />--><button id="' + d + g + 'savegame">Save actual position/game</button>';
        j = j + "<fieldset><legend>Notice</legend>This site will neither store nor log games server-side. Saved games will be stored client-side using the HTML5 localStore feature. The used key is <i>chessonline_repo</i>. If you delete this key on your system you will lose all your stored games too.</fieldset>";
        j = j + "<fieldset><legend>Saved Games</legend>";
        j = j + '<div id="' + d + g + 'repository"></div>';
        j = j + "</fieldset>";
        j = j + "</div>";
        $("#" + d).append(j);
        b();
        $("#" + d + g + "savegame").click(function() {
            i()
        });
        $("." + d + g + "load").live("click", function() {
            var k = $(this).attr("id").replace(/.*_([0-9]+)$/, "$1");
            a(k)
        });
        $("." + d + g + "remove").live("click", function() {
            var k = $(this).attr("id").replace(/.*_([0-9]+)$/, "$1");
            h(k)
        })
    }
};