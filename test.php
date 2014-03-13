<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Chrono World</title>
	<meta name="description" content="Chrono world.">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->

	<script src="rpgjs/core/canvas_engine.js"></script>

	<script src="rpgjs/core/Main.js"></script>
	
	<script src="rpgjs/core/game/Interpreter.js"></script>
	<script src="rpgjs/core/game/Game_Plugin.js"></script>
	<script src="rpgjs/core/game/Game_System.js"></script>
	<script src="rpgjs/core/game/Game_Switches.js"></script>
	<script src="rpgjs/core/game/Game_Variables.js"></script>
	<script src="rpgjs/core/game/Game_SelfSwitches.js"></script>
	<script src="rpgjs/core/game/Game_CommonEvents.js"></script>

	<script src="rpgjs/core/game/Game_Map.js"></script>
	<script src="rpgjs/core/game/Game_Character.js"></script>
	<script src="rpgjs/core/game/Game_Player.js"></script>
	
	<script src="rpgjs/core/game/Game_Event.js"></script>
	<script src="rpgjs/core/game/Game_Actor.js"></script>
	<script src="rpgjs/core/game/Game_Save.js"></script>
	<script src="rpgjs/core/sprite/Sprite.js"></script>
	<script src="rpgjs/core/sprite/Sprite_Plugin.js"></script>
	<script src="rpgjs/core/sprite/Spriteset_Map.js"></script>
	<script src="rpgjs/core/sprite/Sprite_Character.js"></script>
	
	
  
	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="style.css">
	
	<script type="text/javascript">
		RPGJS.Materials = {
			"characters": {
				"1": "event1.png",
				"2": "event2.png"
			},
			"tilesets": {
				"1": "tileset.png"
			}
		};
	
		RPGJS.Database = {
			"actors": {
				"1": {
					"graphic": "1"
				}
			},
			"tilesets": {
				"1": {
					"graphic": "1"
				}
			},
			"map_infos": {		
				"1": {
					"tileset_id": "1",
					"events": ["EV-1"] // in Data/Events/MAP-1/EV-1.json
				},
				"2": {
					"tileset_id": "1"
				}
			}
		};
	
		RPGJS.defines({
			canvas: "canvas",
			autoload: false,
			scene_path: "rpgjs/"
		}).ready(function() {
		
			RPGJS.Player.init({
				actor: 1,
				start: {x: 5, y: 5, id: 1}
			});
			
			RPGJS.Scene.map(function() {
				
			});
		});
		
		//setTimeout(showWindow,500);
		
		function showWindow()
		{
		var interpreter = Class.New("Interpreter");
								
				interpreter.assignCommands([
					'SHOW_TEXT: {"text": "Hello World"}'
				]);

				interpreter.execCommands();
		}
	</script>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<canvas id="canvas" width="1910" height="960"></canvas>
</body>
</html>