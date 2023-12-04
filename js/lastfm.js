    var lastfmData = {
      baseURL:
        "https://ws.audioscrobbler.com/2.0/?method=user.getrecenttracks&user=",
      // Paste your username and token from last.fm
      user: "YOUR_USERNAME",
      api_key: "TOKEN",
      additional: "&format=json&limit=1"
    };

    var getSetLastFM = function() {
      $.ajax({
        type: "GET",
        url:
          lastfmData.baseURL +
          lastfmData.user +
          "&api_key=" +
          lastfmData.api_key +
          lastfmData.additional,
        dataType: "json",
        success: function(resp) {
          if (resp.recenttracks && resp.recenttracks.track && resp.recenttracks.track.length > 0) {
            var recentTrack = resp.recenttracks.track[0];
            var formatted = recentTrack.name;
            $("a#tracktitle")
              .html(formatted)
              .attr("href", recentTrack.url)
              .attr("title", recentTrack.name + " by " + recentTrack.artist["#text"])
              .attr("target", "_blank");

            var artistFormatted = recentTrack.artist["#text"];
            $("a#trackartist")
              .html(artistFormatted)
              .attr("title", "Artist: " + recentTrack.artist["#text"]);
            $("img#trackart").attr("src", recentTrack.image[2]["#text"]);
          } else {
            $("a#tracktitle").html("No listening ");
            $("img#trackart").attr("src", "./assets/img/trackart.png");
            $("a#trackartist").html("");
          }
        },
        error: function(resp) {
          $("a#tracktitle").html("Unknown Track");
          $("img#trackart").attr("src", "./assets/img/trackart.png");
          var artistFormatted = "Unknown artist";
          $("a#trackartist").html(artistFormatted);
        }
      });
    };
// Change update time for scrobbles
    getSetLastFM();
    setInterval(getSetLastFM, 5 * 1000);