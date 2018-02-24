<?php

    declare(strict_types = 1);

    defined('INSIDE') OR exit('No direct script access allowed');

    class Data_Units {

        private $units;

        private $names;

        private $descriptions;

        private $pricelist;

        private $requeriments;

        function __construct() {

            global $path, $config;

            require $path['language'] . $config['language'] . '/units.php';

            $this->units = [
                1  => 'metal_mine',
                2  => 'crystal_mine',
                3  => 'deuterium_synthesizer',
                4  => 'solar_plant',
                5  => 'fusion_reactor',
                6  => 'robotic_factory',
                7  => 'nanite_factory',
                8  => 'shipyard',
                9  => 'metal_storage',
                10 => 'crystal_storage',
                11 => 'deuterium_storage',
                12 => 'research_lab',
                13 => 'terraformer',
                14 => 'alliance_depot',
                15 => 'missile_silo',

                101 => 'espionage_tech',
                102 => 'computer_tech',
                103 => 'weapon_tech',
                104 => 'armour_tech',
                105 => 'shielding_tech',
                106 => 'energy_tech',
                107 => 'hyperspace_tech',
                108 => 'combustion_drive_tech',
                109 => 'impulse_drive_tech',
                110 => 'hyperspace_drive_tech',
                111 => 'laser_tech',
                112 => 'ion_tech',
                113 => 'plasma_tech',
                114 => 'intergalactic_research_tech',
                115 => 'graviton_tech',

                201 => 'small_cargo_ship',
                202 => 'large_cargo_ship',
                203 => 'light_fighter',
                204 => 'heavy_fighter',
                205 => 'cruiser',
                206 => 'battleship',
                207 => 'colony_ship',
                208 => 'recycler',
                209 => 'espionage_probe',
                210 => 'bomber',
                211 => 'solar_satellite',
                212 => 'destroyer',
                213 => 'battlecruiser',
                214 => 'deathstar',

                301 => 'rocket_launcher',
                302 => 'light_laser',
                303 => 'heavy_laser',
                304 => 'gauss_cannon',
                305 => 'ion_cannon',
                306 => 'plasma_turret',
                307 => 'small_shield_dome',
                308 => 'large_shield_dome',
                309 => 'anti_ballistic_missile',
                310 => 'interplanetary_missile'
            ];

            $this->names = [
                1  => $lang["metal_mine"],
                2  => $lang["crystal_mine"],
                3  => $lang["deuterium_synthesizer"],
                4  => $lang["solar_plant"],
                5  => $lang["fusion_reactor"],
                6  => $lang["robotic_factory"],
                7  => $lang["nanite_factory"],
                8  => $lang["shipyard"],
                9  => $lang["metal_storage"],
                10 => $lang["crystal_storage"],
                11 => $lang["deuterium_storage"],
                12 => $lang["research_lab"],
                13 => $lang["terraformer"],
                14 => $lang["alliance_depot"],
                15 => $lang["missile_silo"],

                101 => $lang["espionage_tech"],
                102 => $lang["computer_tech"],
                103 => $lang["weapon_tech"],
                104 => $lang["armour_tech"],
                105 => $lang["shielding_tech"],
                106 => $lang["energy_tech"],
                107 => $lang["hyperspace_tech"],
                108 => $lang["combustion_drive_tech"],
                109 => $lang["impulse_drive_tech"],
                110 => $lang["hyperspace_drive_tech"],
                111 => $lang["laser_tech"],
                112 => $lang["ion_tech"],
                113 => $lang["plasma_tech"],
                114 => $lang["intergalactic_research_tech"],
                115 => $lang["graviton_tech"],

                201 => $lang["small_cargo_ship"],
                202 => $lang["large_cargo_ship"],
                203 => $lang["light_fighter"],
                204 => $lang["heavy_fighter"],
                205 => $lang["cruiser"],
                206 => $lang["battleship"],
                207 => $lang["colony_ship"],
                208 => $lang["recycler"],
                209 => $lang["espionage_probe"],
                210 => $lang["bomber"],
                211 => $lang["solar_satellite"],
                212 => $lang["destroyer"],
                213 => $lang["battlecruiser"],
                214 => $lang["deathstar"],

                301 => $lang["rocket_launcher"],
                302 => $lang["light_laser"],
                303 => $lang["heavy_laser"],
                304 => $lang["gauss_cannon"],
                305 => $lang["ion_cannon"],
                306 => $lang["plasma_turret"],
                307 => $lang["small_shield_dome"],
                308 => $lang["large_shield_dome"],
                309 => $lang["anti_ballistic_missile"],
                310 => $lang["interplanetary_missile"]
            ];

            $this->descriptions = [
                1  => $lang["metal_mine_descr"],
                2  => $lang["crystal_mine_descr"],
                3  => $lang["deuterium_synthesizer_descr"],
                4  => $lang["solar_plant_descr"],
                5  => $lang["fusion_reactor_descr"],
                6  => $lang["robotic_factory_descr"],
                7  => $lang["nanite_factory_descr"],
                8  => $lang["shipyard_descr"],
                9  => $lang["metal_storage_descr"],
                10 => $lang["crystal_storage_descr"],
                11 => $lang["deuterium_storage_descr"],
                12 => $lang["research_lab_descr"],
                13 => $lang["terraformer_descr"],
                14 => $lang["alliance_depot_descr"],
                15 => $lang["missile_silo_descr"],


                101 => $lang["espionage_tech_descr"],
                102 => $lang["computer_tech_descr"],
                103 => $lang["weapon_tech_descr"],
                104 => $lang["armour_tech_descr"],
                105 => $lang["shielding_tech_descr"],
                106 => $lang["energy_tech_descr"],
                107 => $lang["hyperspace_tech_descr"],
                108 => $lang["combustion_drive_tech_descr"],
                109 => $lang["impulse_drive_tech_descr"],
                110 => $lang["hyperspace_drive_tech_descr"],
                111 => $lang["laser_tech_descr"],
                112 => $lang["ion_tech_descr"],
                113 => $lang["plasma_tech_descr"],
                114 => $lang["intergalactic_research_tech_descr"],
                115 => $lang["graviton_tech_descr"],

                201 => $lang["small_cargo_ship_descr"],
                202 => $lang["large_cargo_ship_descr"],
                203 => $lang["light_fighter_descr"],
                204 => $lang["heavy_fighter_descr"],
                205 => $lang["cruiser_descr"],
                206 => $lang["battleship_descr"],
                207 => $lang["colony_ship_descr"],
                208 => $lang["recycler_descr"],
                209 => $lang["espionage_probe_descr"],
                210 => $lang["bomber_descr"],
                211 => $lang["solar_satellite_descr"],
                212 => $lang["destroyer_descr"],
                213 => $lang["battlecruiser_descr"],
                214 => $lang["deathstar_descr"]
            ];

            $this->pricelist = [
                // Buildings
                1   => ['metal' => 60, 'crystal' => 15, 'deuterium' => 0, 'energy' => 0, 'factor' => 1.5],
                2   => ['metal' => 48, 'crystal' => 24, 'deuterium' => 0, 'energy' => 0, 'factor' => 1.6],
                3   => ['metal' => 225, 'crystal' => 75, 'deuterium' => 0, 'energy' => 0, 'factor' => 1.5],
                4   => ['metal' => 75, 'crystal' => 30, 'deuterium' => 0, 'energy' => 0, 'factor' => 1.5],
                5   => ['metal' => 900, 'crystal' => 360, 'deuterium' => 180, 'energy' => 0, 'factor' => 1.8],
                6   => ['metal' => 400, 'crystal' => 120, 'deuterium' => 200, 'energy' => 0, 'factor' => 2],
                7   => ['metal' => 1000000, 'crystal' => 500000, 'deuterium' => 100000, 'energy' => 0, 'factor' => 2],
                8   => ['metal' => 400, 'crystal' => 200, 'deuterium' => 100, 'energy' => 0, 'factor' => 2],
                9   => ['metal' => 2000, 'crystal' => 0, 'deuterium' => 0, 'energy' => 0, 'factor' => 2],
                10  => ['metal' => 2000, 'crystal' => 1000, 'deuterium' => 0, 'energy' => 0, 'factor' => 2],
                11  => ['metal' => 2000, 'crystal' => 2000, 'deuterium' => 0, 'energy' => 0, 'factor' => 2],
                12  => ['metal' => 200, 'crystal' => 400, 'deuterium' => 200, 'energy' => 0, 'factor' => 2],
                13  => ['metal' => 0, 'crystal' => 50000, 'deuterium' => 100000, 'energy' => 1000, 'factor' => 2],
                14  => ['metal' => 20000, 'crystal' => 40000, 'deuterium' => 0, 'energy' => 0, 'factor' => 2],
                15  => ['metal' => 20000, 'crystal' => 20000, 'deuterium' => 1000, 'energy' => 0, 'factor' => 2],

                // Techs
                101 => ['metal' => 200, 'crystal' => 1000, 'deuterium' => 200, 'energy' => 0, 'factor' => 2],
                102 => ['metal' => 0, 'crystal' => 400, 'deuterium' => 600, 'energy' => 0, 'factor' => 2],
                103 => ['metal' => 800, 'crystal' => 200, 'deuterium' => 0, 'energy' => 0, 'factor' => 2],
                104 => ['metal' => 200, 'crystal' => 600, 'deuterium' => 0, 'energy' => 0, 'factor' => 2],
                105 => ['metal' => 1000, 'crystal' => 0, 'deuterium' => 0, 'energy' => 0, 'factor' => 2],
                106 => ['metal' => 0, 'crystal' => 800, 'deuterium' => 400, 'energy' => 0, 'factor' => 2],
                107 => ['metal' => 0, 'crystal' => 4000, 'deuterium' => 2000, 'energy' => 0, 'factor' => 2],
                108 => ['metal' => 400, 'crystal' => 0, 'deuterium' => 600, 'energy' => 0, 'factor' => 2],
                109 => ['metal' => 2000, 'crystal' => 4000, 'deuterium' => 6000, 'energy' => 0, 'factor' => 2],
                110 => ['metal' => 10000, 'crystal' => 20000, 'deuterium' => 6000, 'energy' => 0, 'factor' => 2],
                111 => ['metal' => 200, 'crystal' => 100, 'deuterium' => 0, 'energy' => 0, 'factor' => 2],
                112 => ['metal' => 1000, 'crystal' => 300, 'deuterium' => 100, 'energy' => 0, 'factor' => 2],
                113 => ['metal' => 2000, 'crystal' => 4000, 'deuterium' => 1000, 'energy' => 0, 'factor' => 2],
                114 => ['metal' => 240000, 'crystal' => 400000, 'deuterium' => 160000, 'energy' => 0, 'factor' => 2],
                115 => ['metal' => 0, 'crystal' => 0, 'deuterium' => 0, 'energy_max' => 300000, 'factor' => 3],

                // Fleet
                201 => ['metal'       => 2000,
                        'crystal'     => 2000,
                        'deuterium'   => 0,
                        'energy'      => 0,
                        'factor'      => 1,
                        'consumption' => 20,
                        'speed'       => 28000,
                        'capacity'    => 5000
                ],
                202 => ['metal'       => 6000,
                        'crystal'     => 6000,
                        'deuterium'   => 0,
                        'energy'      => 0,
                        'factor'      => 1,
                        'consumption' => 50,
                        'speed'       => 17250,
                        'capacity'    => 25000
                ],
                203 => ['metal'       => 3000,
                        'crystal'     => 1000,
                        'deuterium'   => 0,
                        'energy'      => 0,
                        'factor'      => 1,
                        'consumption' => 20,
                        'speed'       => 28750,
                        'capacity'    => 50
                ],
                204 => ['metal'       => 6000,
                        'crystal'     => 4000,
                        'deuterium'   => 0,
                        'energy'      => 0,
                        'factor'      => 1,
                        'consumption' => 75,
                        'speed'       => 28000,
                        'capacity'    => 100
                ],
                205 => ['metal'       => 20000,
                        'crystal'     => 7000,
                        'deuterium'   => 2000,
                        'energy'      => 0,
                        'factor'      => 1,
                        'consumption' => 300,
                        'speed'       => 42000,
                        'capacity'    => 800
                ],
                206 => ['metal'       => 45000,
                        'crystal'     => 15000,
                        'deuterium'   => 0,
                        'energy'      => 0,
                        'factor'      => 1,
                        'consumption' => 500,
                        'speed'       => 31000,
                        'capacity'    => 1500
                ],
                207 => ['metal' => 10000, 'crystal' => 20000, 'deuterium' => 10000, 'energy' => 0, 'factor' => 1],
                208 => ['metal'       => 10000,
                        'crystal'     => 6000,
                        'deuterium'   => 2000,
                        'energy'      => 0,
                        'factor'      => 1,
                        'consumption' => 300,
                        'speed'       => 4600,
                        'capacity'    => 20000
                ],
                209 => ['metal'       => 0,
                        'crystal'     => 1000,
                        'deuterium'   => 0,
                        'energy'      => 0,
                        'factor'      => 1,
                        'consumption' => 1,
                        'speed'       => 230000000,
                        'capacity'    => 5
                ],
                210 => ['metal'       => 50000,
                        'crystal'     => 25000,
                        'deuterium'   => 15000,
                        'energy'      => 0,
                        'factor'      => 1,
                        'consumption' => 1000,
                        'speed'       => 11200,
                        'capacity'    => 500
                ],
                211 => ['metal' => 0, 'crystal' => 2000, 'deuterium' => 500, 'energy' => 0, 'factor' => 1],
                212 => ['metal'       => 60000,
                        'crystal'     => 50000,
                        'deuterium'   => 15000,
                        'energy'      => 0,
                        'factor'      => 1,
                        'consumption' => 1000,
                        'speed'       => 15500,
                        'capacity'    => 2000
                ],
                213 => ['metal' => 30000, 'crystal' => 40000, 'deuterium' => 15000, 'energy' => 0, 'factor' => 1],
                214 => ['metal' => 5000000, 'crystal' => 4000000, 'deuterium' => 1000000, 'energy' => 0, 'factor' => 1],

                // Defense
                301 => ['metal' => 2000, 'crystal' => 0, 'deuterium' => 0, 'energy' => 0, 'factor' => 1],
                302 => ['metal' => 1500, 'crystal' => 500, 'deuterium' => 0, 'energy' => 0, 'factor' => 1],
                303 => ['metal' => 6000, 'crystal' => 2000, 'deuterium' => 0, 'energy' => 0, 'factor' => 1],
                304 => ['metal' => 20000, 'crystal' => 15000, 'deuterium' => 2000, 'energy' => 0, 'factor' => 1],
                305 => ['metal' => 2000, 'crystal' => 6000, 'deuterium' => 0, 'energy' => 0, 'factor' => 1],
                306 => ['metal' => 50000, 'crystal' => 50000, 'deuterium' => 30000, 'energy' => 0, 'factor' => 1],
                307 => ['metal' => 10000, 'crystal' => 10000, 'deuterium' => 0, 'energy' => 0, 'factor' => 1],
                308 => ['metal' => 50000, 'crystal' => 50000, 'deuterium' => 0, 'energy' => 0, 'factor' => 1],
                309 => ['metal' => 8000, 'crystal' => 2000, 'deuterium' => 0, 'energy' => 0, 'factor' => 1],
                310 => ['metal' => 12500, 'crystal' => 2500, 'deuterium' => 10000, 'energy' => 0, 'factor' => 1]
            ];

            $this->requeriments = [
                // buildings
                5   => [3 => 5, 106 => 3],
                7   => [6 => 10, 102 => 10],
                8   => [6 => 2],
                13  => [7 => 1, 106 => 12],

                //techs
                101 => [12 => 3],
                102 => [12 => 1],
                103 => [12 => 4],
                104 => [12 => 2],
                105 => [12 => 6, 106 => 3],
                106 => [12 => 1],
                107 => [12 => 7, 106 => 5, 105 => 5],
                108 => [12 => 1, 106 => 1],
                109 => [12 => 2, 106 => 1],
                110 => [12 => 7, 107 => 3],
                111 => [12 => 1, 106 => 2],
                112 => [12 => 4, 106 => 4, 111 => 5],
                113 => [12 => 4, 106 => 8, 111 => 10, 112 => 5],
                114 => [12 => 10, 102 => 8, 107 => 8],
                115 => [12 => 12]
            ];

        }

        function getUnitID($unitName) : int {

            return array_keys($this->units, $unitName)[0];
        }

        function getUnitName($id) : string {

            return $this->units[$id];
        }

        function getBuildings() : array {

            // dirty solution
            return array_slice($this->units, 0, 15, true);
        }

        function getTechnologies() : array {

            // dirty solution
            return array_slice($this->units, 15, 15, true);
        }

        function getFleet() : array {

            // dirty solution
            return array_slice($this->units, 30, 14, true);
        }

        function getDefense() : array {

            // dirty solution
            return array_slice($this->units, 44, 10, true);
        }

        function getName($id) : string {

            return $this->names[$id];
        }

        function getDescription($id) : string {

            return $this->descriptions[$id];
        }

        function getPriceList($id) : array {

            return $this->pricelist[$id];
        }

        function getRequirements($id) : array {

            if (isset($this->requeriments[$id])) {
                return $this->requeriments[$id];
            } else {
                return [];
            }
        }

        function getBuildTime($id, $toLevel, $robotLvl, $shipYardLvl, $naniteLvl) : float {

            $metal = $this->pricelist[$id]['metal'];
            $crystal = $this->pricelist[$id]['crystal'];
            $factor = $this->pricelist[$id]['factor'] * $toLevel;

            // building
            if ($id < 100) {
                return ($metal * $factor + $crystal * $factor) / (2500 * (1 + $robotLvl) * pow(2, $naniteLvl));
            }

            // tech
            if ($id > 100 && $id < 200) {
                return ($metal * $factor + $crystal * $factor) / (2500 * (1 + $robotLvl) * pow(2, $naniteLvl));
            }

            // fleet and defense
            if ($id > 200 && $id < 400) {
                return ($metal + $crystal) / (2500 * (1 + $shipYardLvl) * pow(2, $naniteLvl));
            }

        }

        function getStorageCapacity($storage_level) : float {

            // Source: http://ogame.wikia.com/wiki/Metal_Storage
            return 100000 + 50000 * (ceil(pow(1.5, $storage_level)) - 1);
        }

        function getMetalProductionPerHour($level) : float {

            return 10 * $level * pow(1.1, $level);
        }

        function getCrystalProductionPerHour($level) : float {

            return 10 * $level * pow(1.1, $level);
        }

        function getDeuteriumProductionPerHour($level) : float {

            return 10 * $level * pow(1.1, $level);
        }

        function getEnergyProduction($solarLevel, $fusionLevel, $energytech, $numSolarSats, $planetMaxTemp) : array {


            return [
                $this->units[4]   => 20 * $solarLevel * pow(1.1, $solarLevel),
                $this->units[5]   => 30 * $fusionLevel * pow((1.05 + $energytech + 0.01), $fusionLevel),
                $this->units[211] => (($planetMaxTemp / 4) + 20) * $numSolarSats
            ];

        }

        function getEnergyConsumption($level) : float {

            return 10 * $level * pow(1.1, $level);
        }
    }