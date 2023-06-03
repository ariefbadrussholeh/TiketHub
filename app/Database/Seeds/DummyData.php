<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DummyData extends Seeder
{
    public function run()
    {
        $data = [
            'email'            => 'admin@gmail.com',
            'username'         => 'admin',
            'password_hash'    => '$2y$10$/BEWMObghIumbezQf4/MU.z0o4rt4wGmX9dL7f0gg6VATI18lOYYG',
            'active'           => 1,
            'force_pass_reset' => 0,
        ];

        $this->db->table('users')->insert($data);

        $data = [
            'email'            => 'arifbadrus08@gmail.com',
            'username'         => 'arifbadrus',
            'password_hash'    => '$2y$10$/BEWMObghIumbezQf4/MU.z0o4rt4wGmX9dL7f0gg6VATI18lOYYG',
            'active'           => 1,
            'force_pass_reset' => 0,
        ];

        $this->db->table('users')->insert($data);

        $this->db->query('INSERT INTO auth_groups_users (group_id, user_id) VALUES(1, 1)');
        $this->db->query('INSERT INTO auth_groups_users (group_id, user_id) VALUES(2, 2)');
        
        // Transportations
        $this->db->query("INSERT INTO transportations (created_at, updated_at, category, operator, type, capacity) VALUES ('2023-06-01 01:14:05', '2023-06-01 01:14:05', 'Bus', 'PO Harapan Jaya', 'Bus Pariwisata', 50)");
        $this->db->query("INSERT INTO transportations (created_at, updated_at, category, operator, type, capacity) VALUES ('2023-06-01 01:15:05', '2023-06-01 01:15:05', 'Bus', 'PO Sinar Jaya', 'Bus Antarkota', 40)");
        $this->db->query("INSERT INTO transportations (created_at, updated_at, category, operator, type, capacity) VALUES ('2023-06-01 01:16:05', '2023-06-01 01:16:05', 'Bus', 'PO Pahala Kencana', 'Bus Ekonomi', 60)");
        $this->db->query("INSERT INTO transportations (created_at, updated_at, category, operator, type, capacity) VALUES ('2023-06-01 01:17:05', '2023-06-01 01:17:05', 'Bus', 'PO Rosalia Indah', 'Bus Patas', 45)");
        $this->db->query("INSERT INTO transportations (created_at, updated_at, category, operator, type, capacity) VALUES ('2023-06-01 01:18:05', '2023-06-01 01:18:05', 'Bus', 'PO Handoyo', 'Bus Eksekutif', 30)");
        $this->db->query("INSERT INTO transportations (created_at, updated_at, category, operator, type, capacity) VALUES ('2023-06-01 01:19:05', '2023-06-01 01:19:05', 'Kereta', 'Argo Bromo Anggrek', 'Kereta Eksekutif', 440)");
        $this->db->query("INSERT INTO transportations (created_at, updated_at, category, operator, type, capacity) VALUES ('2023-06-01 01:20:05', '2023-06-01 01:20:05', 'Kereta', 'Argo Lawu', 'Kereta Bisnis', 600)");
        $this->db->query("INSERT INTO transportations (created_at, updated_at, category, operator, type, capacity) VALUES ('2023-06-01 01:21:05', '2023-06-01 01:21:05', 'Kereta', 'Argo Dwipangga', 'Kereta Eksekutif', 342)");
        $this->db->query("INSERT INTO transportations (created_at, updated_at, category, operator, type, capacity) VALUES ('2023-06-01 01:22:05', '2023-06-01 01:22:05', 'Kereta', 'Argo Parahyangan', 'Kereta Bisnis', 468)");
        $this->db->query("INSERT INTO transportations (created_at, updated_at, category, operator, type, capacity) VALUES ('2023-06-01 01:23:05', '2023-06-01 01:23:05', 'Kereta', 'Argo Wilis', 'Kereta Eksekutif', 342)");
        $this->db->query("INSERT INTO transportations (created_at, updated_at, category, operator, type, capacity) VALUES ('2023-06-01 01:24:05', '2023-06-01 01:24:05', 'Pesawat', 'Garuda Indonesia', 'Boeing 737', 180)");
        $this->db->query("INSERT INTO transportations (created_at, updated_at, category, operator, type, capacity) VALUES ('2023-06-01 01:25:05', '2023-06-01 01:25:05', 'Pesawat', 'Lion Air', 'Airbus A320', 180)");
        $this->db->query("INSERT INTO transportations (created_at, updated_at, category, operator, type, capacity) VALUES ('2023-06-01 01:26:05', '2023-06-01 01:26:05', 'Pesawat', 'AirAsia', 'Airbus A320neo', 186)");
        $this->db->query("INSERT INTO transportations (created_at, updated_at, category, operator, type, capacity) VALUES ('2023-06-01 01:27:05', '2023-06-01 01:27:05', 'Pesawat', 'Citilink', 'Airbus A320neo', 180)");
        $this->db->query("INSERT INTO transportations (created_at, updated_at, category, operator, type, capacity) VALUES ('2023-06-01 01:28:05', '2023-06-01 01:28:05', 'Pesawat', 'Batik Air', 'Boeing 737-900ER', 168)");
        $this->db->query("INSERT INTO transportations (created_at, updated_at, category, operator, type, capacity) VALUES ('2023-06-01 01:29:05', '2023-06-01 01:29:05', 'Travel', 'Traveloka', 'Van', 7)");
        $this->db->query("INSERT INTO transportations (created_at, updated_at, category, operator, type, capacity) VALUES ('2023-06-01 01:30:05', '2023-06-01 01:30:05', 'Travel', 'GrabCar', 'Sedan', 4)");
        $this->db->query("INSERT INTO transportations (created_at, updated_at, category, operator, type, capacity) VALUES ('2023-06-01 01:31:05', '2023-06-01 01:31:05', 'Travel', 'GoCar', 'MPV', 6)");
        $this->db->query("INSERT INTO transportations (created_at, updated_at, category, operator, type, capacity) VALUES ('2023-06-01 01:32:05', '2023-06-01 01:32:05', 'Travel', 'Blue Bird', 'Taxi', 4)");
        $this->db->query("INSERT INTO transportations (created_at, updated_at, category, operator, type, capacity) VALUES ('2023-06-01 01:33:05', '2023-06-01 01:33:05', 'Travel', 'Uber', 'SUV', 6)");
        $this->db->query("INSERT INTO transportations (created_at, updated_at, category, operator, type, capacity) VALUES ('2023-06-01 01:34:05', '2023-06-01 01:34:05', 'Kapal', 'KM Kelud', 'Kapal Ferry', 1500)");
        $this->db->query("INSERT INTO transportations (created_at, updated_at, category, operator, type, capacity) VALUES ('2023-06-01 01:35:05', '2023-06-01 01:35:05', 'Kapal', 'KM Krakatau', 'Kapal Ferry', 1200)");
        $this->db->query("INSERT INTO transportations (created_at, updated_at, category, operator, type, capacity) VALUES ('2023-06-01 01:36:05', '2023-06-01 01:36:05', 'Kapal', 'KM Lambelu', 'Kapal Ferry', 1000)");
        $this->db->query("INSERT INTO transportations (created_at, updated_at, category, operator, type, capacity) VALUES ('2023-06-01 01:37:05', '2023-06-01 01:37:05', 'Kapal', 'KM Mandiri', 'Kapal Ferry', 800)");
        $this->db->query("INSERT INTO transportations (created_at, updated_at, category, operator, type, capacity) VALUES ('2023-06-01 01:38:05', '2023-06-01 01:38:05', 'Kapal', 'KM Jayawijaya', 'Kapal Ferry', 600)");

        // routes
        $this->db->query("INSERT INTO routes (origin, destination, origin_destination, distance, created_at, updated_at) VALUES ('Jakarta', 'Bandung', 'Jakarta - Bandung', '150', '2023-06-03 00:28:11', '2023-06-03 00:28:11')");
        $this->db->query("INSERT INTO routes (origin, destination, origin_destination, distance, created_at, updated_at) VALUES ('Jakarta', 'Surabaya', 'Jakarta - Surabaya', '800', '2023-06-03 00:29:11', '2023-06-03 00:29:11')");
        $this->db->query("INSERT INTO routes (origin, destination, origin_destination, distance, created_at, updated_at) VALUES ('Jakarta', 'Yogyakarta', 'Jakarta - Yogyakarta', '550', '2023-06-03 00:30:11', '2023-06-03 00:30:11')");
        $this->db->query("INSERT INTO routes (origin, destination, origin_destination, distance, created_at, updated_at) VALUES ('Bandung', 'Jakarta', 'Bandung - Jakarta', '150', '2023-06-03 00:31:11', '2023-06-03 00:31:11')");
        $this->db->query("INSERT INTO routes (origin, destination, origin_destination, distance, created_at, updated_at) VALUES ('Bandung', 'Surabaya', 'Bandung - Surabaya', '950', '2023-06-03 00:32:11', '2023-06-03 00:32:11')");
        $this->db->query("INSERT INTO routes (origin, destination, origin_destination, distance, created_at, updated_at) VALUES ('Bandung', 'Yogyakarta', 'Bandung - Yogyakarta', '400', '2023-06-03 00:33:11', '2023-06-03 00:33:11')");
        $this->db->query("INSERT INTO routes (origin, destination, origin_destination, distance, created_at, updated_at) VALUES ('Surabaya', 'Jakarta', 'Surabaya - Jakarta', '800', '2023-06-03 00:34:11', '2023-06-03 00:34:11')");
        $this->db->query("INSERT INTO routes (origin, destination, origin_destination, distance, created_at, updated_at) VALUES ('Surabaya', 'Bandung', 'Surabaya - Bandung', '950', '2023-06-03 00:35:11', '2023-06-03 00:35:11')");
        $this->db->query("INSERT INTO routes (origin, destination, origin_destination, distance, created_at, updated_at) VALUES ('Surabaya', 'Yogyakarta', 'Surabaya - Yogyakarta', '700', '2023-06-03 00:36:11', '2023-06-03 00:36:11')");
        $this->db->query("INSERT INTO routes (origin, destination, origin_destination, distance, created_at, updated_at) VALUES ('Yogyakarta', 'Jakarta', 'Yogyakarta - Jakarta', '550', '2023-06-03 00:37:11', '2023-06-03 00:37:11')");
        $this->db->query("INSERT INTO routes (origin, destination, origin_destination, distance, created_at, updated_at) VALUES ('Yogyakarta', 'Bandung', 'Yogyakarta - Bandung', '400', '2023-06-03 00:38:11', '2023-06-03 00:38:11')");
        $this->db->query("INSERT INTO routes (origin, destination, origin_destination, distance, created_at, updated_at) VALUES ('Yogyakarta', 'Surabaya', 'Yogyakarta - Surabaya', '700', '2023-06-03 00:39:11', '2023-06-03 00:39:11')");
        $this->db->query("INSERT INTO routes (origin, destination, origin_destination, distance, created_at, updated_at) VALUES ('Jakarta', 'Denpasar', 'Jakarta - Denpasar', '1000', '2023-06-03 00:40:11', '2023-06-03 00:40:11')");
        $this->db->query("INSERT INTO routes (origin, destination, origin_destination, distance, created_at, updated_at) VALUES ('Denpasar', 'Jakarta', 'Denpasar - Jakarta', '1000', '2023-06-03 00:41:11', '2023-06-03 00:41:11')");
        $this->db->query("INSERT INTO routes (origin, destination, origin_destination, distance, created_at, updated_at) VALUES ('Jakarta', 'Medan', 'Jakarta - Medan', '1600', '2023-06-03 00:42:11', '2023-06-03 00:42:11')");
        $this->db->query("INSERT INTO routes (origin, destination, origin_destination, distance, created_at, updated_at) VALUES ('Medan', 'Jakarta', 'Medan - Jakarta', '1600', '2023-06-03 00:43:11', '2023-06-03 00:43:11')");
        $this->db->query("INSERT INTO routes (origin, destination, origin_destination, distance, created_at, updated_at) VALUES ('Jakarta', 'Makassar', 'Jakarta - Makassar', '2100', '2023-06-03 00:44:11', '2023-06-03 00:44:11')");
        $this->db->query("INSERT INTO routes (origin, destination, origin_destination, distance, created_at, updated_at) VALUES ('Makassar', 'Jakarta', 'Makassar - Jakarta', '2100', '2023-06-03 00:45:11', '2023-06-03 00:45:11')");
        $this->db->query("INSERT INTO routes (origin, destination, origin_destination, distance, created_at, updated_at) VALUES ('Bandung', 'Denpasar', 'Bandung - Denpasar', '1100', '2023-06-03 00:46:11', '2023-06-03 00:46:11')");
        $this->db->query("INSERT INTO routes (origin, destination, origin_destination, distance, created_at, updated_at) VALUES ('Denpasar', 'Bandung', 'Denpasar - Bandung', '1100', '2023-06-03 00:47:11', '2023-06-03 00:47:11')");
        $this->db->query("INSERT INTO routes (origin, destination, origin_destination, distance, created_at, updated_at) VALUES ('Surabaya', 'Medan', 'Surabaya - Medan', '1800', '2023-06-03 00:48:11', '2023-06-03 00:48:11')");
        $this->db->query("INSERT INTO routes (origin, destination, origin_destination, distance, created_at, updated_at) VALUES ('Medan', 'Surabaya', 'Medan - Surabaya', '1800', '2023-06-03 00:49:11', '2023-06-03 00:49:11')");
        $this->db->query("INSERT INTO routes (origin, destination, origin_destination, distance, created_at, updated_at) VALUES ('Yogyakarta', 'Makassar', 'Yogyakarta - Makassar', '2200', '2023-06-03 00:50:11', '2023-06-03 00:50:11')");
        $this->db->query("INSERT INTO routes (origin, destination, origin_destination, distance, created_at, updated_at) VALUES ('Makassar', 'Yogyakarta', 'Makassar - Yogyakarta', '2200', '2023-06-03 00:51:11', '2023-06-03 00:51:11')");

        // schedule
        $this->db->query("INSERT INTO schedules (transportation_id, route_id, time, date, price, duration_trip, created_at, updated_at) VALUES ('1', '1', '8:00', '2023-06-16', '100000', '3 jam', '2023-06-03 00:43:58', '2023-06-03 00:43:58')");
        $this->db->query("INSERT INTO schedules (transportation_id, route_id, time, date, price, duration_trip, created_at, updated_at) VALUES ('1', '1', '12:00', '2023-06-16', '100000', '3 jam', '2023-06-03 00:44:58', '2023-06-03 00:44:58')");
        $this->db->query("INSERT INTO schedules (transportation_id, route_id, time, date, price, duration_trip, created_at, updated_at) VALUES ('2', '2', '9:30', '2023-06-16', '250000', '10 jam', '2023-06-03 00:45:58', '2023-06-03 00:45:58')");
        $this->db->query("INSERT INTO schedules (transportation_id, route_id, time, date, price, duration_trip, created_at, updated_at) VALUES ('2', '2', '13:30', '2023-06-16', '250000', '10 jam', '2023-06-03 00:46:58', '2023-06-03 00:46:58')");
        $this->db->query("INSERT INTO schedules (transportation_id, route_id, time, date, price, duration_trip, created_at, updated_at) VALUES ('3', '3', '7:00', '2023-06-16', '200000', '8 jam', '2023-06-03 00:47:58', '2023-06-03 00:47:58')");
        $this->db->query("INSERT INTO schedules (transportation_id, route_id, time, date, price, duration_trip, created_at, updated_at) VALUES ('3', '3', '15:00', '2023-06-16', '200000', '8 jam', '2023-06-03 00:48:58', '2023-06-03 00:48:58')");
        $this->db->query("INSERT INTO schedules (transportation_id, route_id, time, date, price, duration_trip, created_at, updated_at) VALUES ('6', '1', '10:00', '2023-06-16', '150000', '2.5 jam', '2023-06-03 00:49:58', '2023-06-03 00:49:58')");
        $this->db->query("INSERT INTO schedules (transportation_id, route_id, time, date, price, duration_trip, created_at, updated_at) VALUES ('6', '1', '14:00', '2023-06-16', '150000', '2.5 jam', '2023-06-03 00:50:58', '2023-06-03 00:50:58')");
        $this->db->query("INSERT INTO schedules (transportation_id, route_id, time, date, price, duration_trip, created_at, updated_at) VALUES ('7', '2', '11:30', '2023-06-16', '300000', '9 jam', '2023-06-03 00:51:58', '2023-06-03 00:51:58')");
        $this->db->query("INSERT INTO schedules (transportation_id, route_id, time, date, price, duration_trip, created_at, updated_at) VALUES ('7', '2', '15:30', '2023-06-16', '300000', '9 jam', '2023-06-03 00:52:58', '2023-06-03 00:52:58')");
        $this->db->query("INSERT INTO schedules (transportation_id, route_id, time, date, price, duration_trip, created_at, updated_at) VALUES ('8', '3', '8:30', '2023-06-16', '250000', '7.5 jam', '2023-06-03 00:53:58', '2023-06-03 00:53:58')");
        $this->db->query("INSERT INTO schedules (transportation_id, route_id, time, date, price, duration_trip, created_at, updated_at) VALUES ('8', '3', '16:30', '2023-06-16', '250000', '7.5 jam', '2023-06-03 00:54:58', '2023-06-03 00:54:58')");
        $this->db->query("INSERT INTO schedules (transportation_id, route_id, time, date, price, duration_trip, created_at, updated_at) VALUES ('9', '4', '7:30', '2023-06-16', '100000', '2 jam', '2023-06-03 00:55:58', '2023-06-03 00:55:58')");
        $this->db->query("INSERT INTO schedules (transportation_id, route_id, time, date, price, duration_trip, created_at, updated_at) VALUES ('9', '4', '11:30', '2023-06-16', '100000', '2 jam', '2023-06-03 00:56:58', '2023-06-03 00:56:58')");
        $this->db->query("INSERT INTO schedules (transportation_id, route_id, time, date, price, duration_trip, created_at, updated_at) VALUES ('10', '5', '9:00', '2023-06-16', '200000', '7 jam', '2023-06-03 00:57:58', '2023-06-03 00:57:58')");
        $this->db->query("INSERT INTO schedules (transportation_id, route_id, time, date, price, duration_trip, created_at, updated_at) VALUES ('10', '5', '13:00', '2023-06-16', '200000', '7 jam', '2023-06-03 00:58:58', '2023-06-03 00:58:58')");
        $this->db->query("INSERT INTO schedules (transportation_id, route_id, time, date, price, duration_trip, created_at, updated_at) VALUES ('11', '6', '10:30', '2023-06-16', '350000', '2.5 jam', '2023-06-03 00:59:58', '2023-06-03 00:59:58')");
        $this->db->query("INSERT INTO schedules (transportation_id, route_id, time, date, price, duration_trip, created_at, updated_at) VALUES ('11', '6', '14:30', '2023-06-16', '350000', '2.5 jam', '2023-06-03 01:00:58', '2023-06-03 01:00:58')");
        $this->db->query("INSERT INTO schedules (transportation_id, route_id, time, date, price, duration_trip, created_at, updated_at) VALUES ('12', '7', '8:30', '2023-06-16', '180000', '2 jam', '2023-06-03 01:01:58', '2023-06-03 01:01:58')");
        $this->db->query("INSERT INTO schedules (transportation_id, route_id, time, date, price, duration_trip, created_at, updated_at) VALUES ('12', '7', '12:30', '2023-06-16', '180000', '2 jam', '2023-06-03 01:02:58', '2023-06-03 01:02:58')");
        $this->db->query("INSERT INTO schedules (transportation_id, route_id, time, date, price, duration_trip, created_at, updated_at) VALUES ('13', '8', '9:30', '2023-06-16', '220000', '3.5 jam', '2023-06-03 01:03:58', '2023-06-03 01:03:58')");
        $this->db->query("INSERT INTO schedules (transportation_id, route_id, time, date, price, duration_trip, created_at, updated_at) VALUES ('13', '8', '13:30', '2023-06-16', '220000', '3.5 jam', '2023-06-03 01:04:58', '2023-06-03 01:04:58')");
        $this->db->query("INSERT INTO schedules (transportation_id, route_id, time, date, price, duration_trip, created_at, updated_at) VALUES ('14', '10', '8:00', '2023-06-16', '230000', '1.5 jam', '2023-06-03 01:05:58', '2023-06-03 01:05:58')");
        $this->db->query("INSERT INTO schedules (transportation_id, route_id, time, date, price, duration_trip, created_at, updated_at) VALUES ('14', '10', '16:00', '2023-06-16', '230000', '1.5 jam', '2023-06-03 01:06:58', '2023-06-03 01:06:58')");
        $this->db->query("INSERT INTO schedules (transportation_id, route_id, time, date, price, duration_trip, created_at, updated_at) VALUES ('15', '10', '10:00', '2023-06-16', '280000', '1.5 jam', '2023-06-03 01:07:58', '2023-06-03 01:07:58')");
        $this->db->query("INSERT INTO schedules (transportation_id, route_id, time, date, price, duration_trip, created_at, updated_at) VALUES ('15', '12', '14:00', '2023-06-16', '280000', '1.5 jam', '2023-06-03 01:08:58', '2023-06-03 01:08:58')");
        $this->db->query("INSERT INTO schedules (transportation_id, route_id, time, date, price, duration_trip, created_at, updated_at) VALUES ('16', '17', '9:30', '2023-06-16', '400000', '3 jam', '2023-06-03 01:09:58', '2023-06-03 01:09:58')");
        $this->db->query("INSERT INTO schedules (transportation_id, route_id, time, date, price, duration_trip, created_at, updated_at) VALUES ('16', '17', '13:30', '2023-06-16', '400000', '3 jam', '2023-06-03 01:10:58', '2023-06-03 01:10:58')");
        $this->db->query("INSERT INTO schedules (transportation_id, route_id, time, date, price, duration_trip, created_at, updated_at) VALUES ('17', '19', '10:30', '2023-06-16', '500000', '14 jam', '2023-06-03 01:11:58', '2023-06-03 01:11:58')");
        $this->db->query("INSERT INTO schedules (transportation_id, route_id, time, date, price, duration_trip, created_at, updated_at) VALUES ('17', '19', '14:30', '2023-06-16', '500000', '14 jam', '2023-06-03 01:12:58', '2023-06-03 01:12:58')");
        $this->db->query("INSERT INTO schedules (transportation_id, route_id, time, date, price, duration_trip, created_at, updated_at) VALUES ('18', '21', '8:30', '2023-06-16', '550000', '15 jam', '2023-06-03 01:13:58', '2023-06-03 01:13:58')");
        $this->db->query("INSERT INTO schedules (transportation_id, route_id, time, date, price, duration_trip, created_at, updated_at) VALUES ('18', '21', '12:30', '2023-06-16', '550000', '15 jam', '2023-06-03 01:14:58', '2023-06-03 01:14:58')");
        $this->db->query("INSERT INTO schedules (transportation_id, route_id, time, date, price, duration_trip, created_at, updated_at) VALUES ('19', '23', '9:00', '2023-06-16', '600000', '18 jam', '2023-06-03 01:15:58', '2023-06-03 01:15:58')");
        $this->db->query("INSERT INTO schedules (transportation_id, route_id, time, date, price, duration_trip, created_at, updated_at) VALUES ('19', '23', '13:00', '2023-06-16', '600000', '18 jam', '2023-06-03 01:16:58', '2023-06-03 01:16:58')");
        $this->db->query("INSERT INTO schedules (transportation_id, route_id, time, date, price, duration_trip, created_at, updated_at) VALUES ('20', '14', '10:30', '2023-06-16', '200000', '2.5 jam', '2023-06-03 01:17:58', '2023-06-03 01:17:58')");
        $this->db->query("INSERT INTO schedules (transportation_id, route_id, time, date, price, duration_trip, created_at, updated_at) VALUES ('20', '14', '14:30', '2023-06-16', '200000', '2.5 jam', '2023-06-03 01:18:58', '2023-06-03 01:18:58')");
        $this->db->query("INSERT INTO schedules (transportation_id, route_id, time, date, price, duration_trip, created_at, updated_at) VALUES ('21', '1', '8:00', '2023-06-16', '80000', '3 jam', '2023-06-03 01:19:58', '2023-06-03 01:19:58')");
        $this->db->query("INSERT INTO schedules (transportation_id, route_id, time, date, price, duration_trip, created_at, updated_at) VALUES ('21', '1', '12:00', '2023-06-16', '80000', '3 jam', '2023-06-03 01:20:58', '2023-06-03 01:20:58')");
        $this->db->query("INSERT INTO schedules (transportation_id, route_id, time, date, price, duration_trip, created_at, updated_at) VALUES ('22', '2', '9:30', '2023-06-16', '180000', '10 jam', '2023-06-03 01:21:58', '2023-06-03 01:21:58')");
        $this->db->query("INSERT INTO schedules (transportation_id, route_id, time, date, price, duration_trip, created_at, updated_at) VALUES ('22', '2', '13:30', '2023-06-16', '180000', '10 jam', '2023-06-03 01:22:58', '2023-06-03 01:22:58')");
        $this->db->query("INSERT INTO schedules (transportation_id, route_id, time, date, price, duration_trip, created_at, updated_at) VALUES ('23', '3', '7:00', '2023-06-16', '160000', '8 jam', '2023-06-03 01:23:58', '2023-06-03 01:23:58')");
        $this->db->query("INSERT INTO schedules (transportation_id, route_id, time, date, price, duration_trip, created_at, updated_at) VALUES ('23', '3', '15:00', '2023-06-16', '160000', '8 jam', '2023-06-03 01:24:58', '2023-06-03 01:24:58')");
        $this->db->query("INSERT INTO schedules (transportation_id, route_id, time, date, price, duration_trip, created_at, updated_at) VALUES ('24', '4', '10:00', '2023-06-16', '80000', '2 jam', '2023-06-03 01:25:58', '2023-06-03 01:25:58')");
        $this->db->query("INSERT INTO schedules (transportation_id, route_id, time, date, price, duration_trip, created_at, updated_at) VALUES ('24', '4', '14:00', '2023-06-16', '80000', '2 jam', '2023-06-03 01:26:58', '2023-06-03 01:26:58')");
        $this->db->query("INSERT INTO schedules (transportation_id, route_id, time, date, price, duration_trip, created_at, updated_at) VALUES ('25', '5', '11:30', '2023-06-16', '180000', '9.5 jam', '2023-06-03 01:27:58', '2023-06-03 01:27:58')");
        $this->db->query("INSERT INTO schedules (transportation_id, route_id, time, date, price, duration_trip, created_at, updated_at) VALUES ('25', '5', '15:30', '2023-06-16', '180000', '9.5 jam', '2023-06-03 01:28:58', '2023-06-03 01:28:58')");

        // ticket
        $this->db->query("INSERT INTO tickets (user_id, schedule_id, booking_date, full_name, phone_number, card_identity, birth_date) VALUES ('2', '1', '2023-06-03 1:47:33', 'Arief Badrus Sholeh', '89514644904', '3527031101020011', '2002-01-11')");
    }
}
