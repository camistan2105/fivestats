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

function loadTeamCreationModal(endPoint){
	$.ajax({
		url: endPoint,
		method: 'post',
		dataType: 'json',
		success: function(players){			
			var playersSelectHtml = "";

			$.each(players, function(index, player) {
					playersSelectHtml += '<option value="' + player.id + '" >' + player.name + '</option>';
			});

			$('#team_players_select').html(playersSelectHtml);
			$('#team_creation_modal').modal('show');
		}
	});
}

function getPlayers(endPoint) {

}

$(document).ready(function() {
	$('#team_players_select').multiSelect();
});