function showTeamCard(element, teamId, endPoint) {
    $.ajax({
		url: endPoint,
		method: 'post',
		data: {team_id: teamId},
		dataType: 'json',
		success: function(team_data){
			
			var playerHtml = "";

			$.each(team_data['players'], function(index, player) {
   				playerHtml += '<a href="#" data-id="" class="list-group-item">' + player.name + '</a>';
			});

			$('#players_team_card').html(playerHtml);
			$('.team-list').removeClass('active');
			$(element).addClass('active');

			$('#name_team_card').html(team_data['team']['name']);
			$('#played_games_team_card').html(team_data['stats']['played_games']);
			$('#wins_team_card').html(team_data['stats']['wins']);
			$('#draws_team_card').html(team_data['stats']['draws']);
			$('#losses_team_card').html(team_data['stats']['losses']);
		}
	});
}

function showPlayerCard(element, playerId, endPoint) {
    $.ajax({
		url: endPoint,
		method: 'post',
		data: {player_id: playerId},
		dataType: 'json',
		success: function(player_data){
			
			$('.player-list').removeClass('active');
			$(element).addClass('active');

			$('#name_player_card').html(player_data['player']['name']);
			$('#played_games_player_card').html(player_data['stats']['played_games']);
			//$('#wins_team_card').html(team_data['stats']['wins']);
			//$('#draws_team_card').html(team_data['stats']['draws']);
			//$('#losses_team_card').html(team_data['stats']['losses']);
		}
	});
}

function insertTeam(endPoint){
	var selectedPlayers = $('#team_players_select').val();
	var teamName = $('#team_name_input').val();

    $.ajax({
		url: endPoint,
		method: 'post',
		data: {team_name: teamName, team_players: selectedPlayers},
		dataType: 'json',
		async: false,
		success: function(result){
		}
	});

	$('#team_creation_modal').modal('hide');
	location.reload();
}

$(document).ready(function() {
	$('#team_players_select').multiSelect();
});