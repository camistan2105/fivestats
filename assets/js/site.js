function showTeamCard(teamId, endPoint) {
    $.ajax({
		url: endPoint,
		method: 'post',
		data: {team_id: teamId},
		dataType: 'json',
		success: function(players){
			
			var playerHtml = "";

			$.each(players, function(index, player) {
   				playerHtml += '<a href="#" data-id="" class="list-group-item">' + player.name + '</a>';
			});

			$('#players_team_card').html(playerHtml);
		}
	});
}