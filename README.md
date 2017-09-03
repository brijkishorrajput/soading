Project installation step


1) Install PHP/Mysql/Apache on your Window/MAC/Linux machine
2) CREATE a data Name : test
3) run below mysql query
4) copy code within webroot folder 
5) open command line window and go within project root folder 
6) start cake server with the user of "bin/cake server"   
7) One URL (http://localhost:8765/) with port number will be display here open it within browser 
8) Now we can add/edit/update/delete/list all users and Create unlimited task for any users 

if any query contact Gmail : brijkishorrajput@gmail.com Or Skype: brijkishorrajput 

MYSQL Database files

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `user_id`, `name`, `description`, `dateCreated`, `dateUpdated`) VALUES
(1, 1, 'Brij Task1', 'Brij Task1 Description', '2017-09-02 10:07:00', '2017-09-02 10:07:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `age` int(11) NOT NULL,
  `address` char(255) DEFAULT NULL,
  `salary` decimal(18,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `age`, `address`, `salary`) VALUES
(1, 'brij', 31, 'Address', '21.60'),
(2, 'kishor', 23, 'B 135', '22.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `task_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

