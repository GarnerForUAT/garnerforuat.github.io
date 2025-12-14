<?php
// develop a  2d arry to convert to JSON format
$data = [
     ['name' => 'The M.E.D.U Mars Truck. Founded in', 'value' => 2043.], 
     ['name' => 'The M.E.D.U Mars Truck is a heavy-duty vehicle designed for transporting supplies and personnel across the challenging terrain of Mars. It features advanced suspension systems, reinforced armor plating, and autonomous navigation capabilities to ensure safe and efficient travel across Martian environment.', 'value' => 'moves at 60 mph'],
['name' => 'The M.E.D.U Space Spear. Founded in', 'value' => 2034.],
     ['name' => 'The M.E.D.U Space Spear is a sleek and agile spacecraft designed for rapid response and exploration missions. Equipped with state-of-the-art propulsion systems and advanced life support technologies, the Space Spear enables astronauts to undertake long-duration missions while ensuring their safety and comfort in the harsh conditions of space.', 'value' => 'reaches speeds up to 25,000 mph'],
     ['name' => 'M.E.D.U Falcon. Found in', 'value' => 2034.],
     ['name' => 'The M.E.D.U Falcon is a versatile aerial vehicle designed for both reconnaissance and transport missions. With its cutting-edge avionics and stealth capabilities, the Falcon can navigate through challenging environments while providing critical support to ground operations.', 'value' => 'flies at 500 mph'],
     ['name' => 'A.T.H.E.N.A. Mech Suit. Founded in', 'value' => 2040.],
     ['name' => 'The A.T.H.E.N.A. Mech Suit is an advanced exoskeleton designed to enhance human strength and endurance in extreme environments. Equipped with reinforced armor and integrated life support systems, the mech suit allows operators to perform heavy lifting, navigate hazardous terrain, and withstand harsh conditions while maintaining mobility and agility.', 'value' => 'operates for 12 hours on a single charge'],
     ['name' => 'M.E.D.U Whale Rover. Found in', 'value' => 2030.],
     ['name' => 'The M.E.D.U Whale Rover is an amphibious exploration vehicle designed for missions in both aquatic and terrestrial environments. Featuring a robust hull and advanced navigation systems, the Whale Rover can traverse diverse terrains while conducting scientific research and rescue operations.', 'value' => 'travels at 30 mph on land and 15 mph in water'],

];
// conver header to JSON format
header('Content-Type: application/json');

// encode the array to JSON format and output it
echo json_encode($data);
?>


