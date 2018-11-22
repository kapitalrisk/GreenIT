INSERT INTO form_question (content, type, choices, multiple, comment, category, subcategory) VALUES 
('In which sector of activity is your company active? (linked with your APE code)', 'choice', 'Industry;0;Business;0;Information and communication;0;Other services activity;0;All other activities (financial, agricultural activities ...);0;Construction;0;Public sector;0;Specialized, Scientific and Technical or Administrative and Support Services Activities;0;Real estate;0',0, '', 'Your compagny', ''),
('What is the number of employees in your company on 18/12/31 ?', 'choice', '0;0;1 to 2;0;3 to 9;0;10 to 49;0;50 to 249;0;250 to 4999;0;More than 5000;0', 0, '', 'Your compagny', ''),
('What is the turnover of your company in the last fiscal year? (or annual budget for Public sector)', 'choice', '0 to 100K€;0;100 to 500 K€;0;500 to 2 M€;0;2 to 10 M€;0;10 to 50 M€;0;More than 50 M€;0', 0, '', 'Your compagny', ''),
('Do you develop digital services for internal or external use (sales to customers)?', 'choice', 'Yes;0;No;0', 0, '', 'Your compagny', ''),
('What is the number of users of your digital services?', 'choice', ';1', 0, '', 'Your compagny', ''),
('Do you apply the rules and best practices for digital accessibility?', 'choice', 'Yes;0;No;0;I don''t know;0', 0, '', 'Your compagny', '1'),
('Have you optimized the states and printouts in your application tools (reduced number of pages when printing, ink consumption ...)', 'choice', 'Yes;0;No;0;I don''t know;0', 0, '', 'Your compagny', '1'),
('Do you integrate the principles of the ecodesign of digital services?', 'choice', 'Yes;0;No;0;I don''t know;0', 0, '', 'Your compagny', '1'),
('Do you use a modular application architecture?', 'choice', 'Yes;0;No;0;I don''t know;0', 0, '', 'Your compagny', '1'),
('Do you do a design review at the end of your application''s development?', 'choice', 'Yes;0;No;0;I don''t know;0', 0, '', 'Your compagny', '1'),
('What is the overall storage volume of your corporate data (centralized on external hard drives, centralized server, NAS, SAN ...) in Terabytes (TB) useful?', 'choice', 'I don''t know;0;I do not want to answer;0;TB;1', 0, '', 'System infrastructure', ''),
('Do you have a server or do you only work with one or more workstations?', 'choice', 'We work with workstation (s), without centralized physical server;0;We have (at least) a centralized physical server;0', 0, '', 'System infrastructure', ''),
('Do you have a dedicated room, simple room or cupboard with bay dedicated to your IT infrastructure?', 'choice', 'A closet or a room without any specific system;0;A dedicated room;0', 0, '', 'System infrastructure', ''),
('Is your computer room in house or at a host?', 'choice', 'Internal;0;Host Member of the European Code of Conduct for Datacenters;0;Non-adhering Host of the European Code of Conduct for Data Centers;0', 0, '', 'System infrastructure', ''),
('What is the total area of your computer rooms (excluding technical infrastructure *)?', 'choice', 'I don''t know;0;I do not want to answer;0;m2;1', 0, '', 'System infrastructure', ''),
('Do you know the PUE * of your Data Center?', 'choice', 'Less than 1,6;0;Between 1,6 and 2,1;0;More than 2,1;0;I don''t know;0', 0, '*PUE : Power Usage Effectiveness', 'System infrastructure', ''),
('What is the rate of charge or energy use of your computer rooms?', 'choice', '100% - 90%;0;90% - 60%;0;Less than 60%;0;I don''t know;0', 0, 'Rate = Electrical power absorbed by your IT equipment, divided by room capacity in kW, then multiplied by 100 (used energy / available energy)', 'System infrastructure', ''),
('Have you led or are you planning actions to optimize your infrastructure? Especially :', '', '', 0, '', 'System infrastructure', '2'),
('The purchase of non-IT equipment from IT rooms (air conditioning, air treatment, inverters, etc.) according to energy efficiency criteria', 'choice', 'Yes;0;No;0;I don''t know;0', 0, '', 'System infrastructure', '2'),
('Implementing the good practices of the "European Code of Conduct for DataCenter"?', 'choice', 'Yes;0;No;0;I don''t know;0', 0, '', 'System infrastructure', '2'),
('Data center PUE tracking', 'choice', 'Yes;0;No;0;I don''t know;0', 0, '', 'System infrastructure', '2'),
('Regular monitoring of environmental indicators of computer rooms', 'choice', 'Yes;0;No;0;I don''t know;0', 0, '', 'System infrastructure', '2'),
('Environmental impact analysis of the datacenter in life cycle approach', 'choice', 'Yes;0;No;0;I don''t know;0', 0, '', 'System infrastructure', '2'),
('Optimizing the architecture and layout of rooms', 'choice', 'Yes;0;No;0;I don''t know;0', 0, '', 'System infrastructure', '2'),
('The urbanization of halls in hot / cold aisles', 'choice', 'Yes;0;No;0;I don''t know;0', 0, '', 'System infrastructure', '2'),
('Containment of air flows (corridors)', 'choice', 'Yes;0;No;0;I don''t know;0', 0, '', 'System infrastructure', '2'),
('The use of natural cooling sources (freecooling)', 'choice', 'Yes;0;No;0;I don''t know;0', 0, '', 'System infrastructure', '2'),
('Implementation of a heat recovery system for computer rooms (heating)', 'choice', 'Yes;0;No;0;I don''t know;0', 0, '', 'System infrastructure', '2'),
('The set temperature in the cold corridor remains higher than 24 °', 'choice', 'Yes;0;No;0;I don''t know;0', 0, '', 'System infrastructure', '2'),
('The choice of a modular datacenter architecture', 'choice', 'Yes;0;No;0;I don''t know;0', 0, '', 'System infrastructure', '2'),
('Have you led or are you planning actions to optimize your infrastructure? Especially :', '', '', 0, '', 'System infrastructure', '3'),
('Suspending network equipment', 'choice', 'Yes;0;No;0;I don''t know;0', 0, '', 'System infrastructure', '3'),
('Pooling physical equipment', 'choice', 'Yes;0;No;0;I don''t know;0', 0, '', 'System infrastructure', '3'),
('Uninstalling unnecessary infrastructure', 'choice', 'Yes;0;No;0;I don''t know;0', 0, '', 'System infrastructure', '3'),
('Traceability of material elements (CMDB)', 'choice', 'Yes;0;No;0;I don''t know;0', 0, '', 'System infrastructure', '3'),
('The correct sizing of the servers in relation to their use', 'choice', 'Yes;0;No;0;I don''t know;0', 0, '', 'System infrastructure', '3'),
('Give priority to ASHRAE 2 compatible equipment', 'choice', 'Yes;0;No;0;I don''t know;0', 0, '', 'System infrastructure', '3'),
('A procedure for provisioning and de-provisioning data-processing equipment in datacenters', 'choice', 'Yes;0;No;0;I don''t know;0', 0, '', 'System infrastructure', '3'),
('Do you know the number of physical servers and virtual servers in your company?', 'choice', 'No;0;I do not want to answer;0;Yes;0', 0, '', 'System infrastructure', ''),
('How many physical servers do you have?', 'text', ';1', 0, '', 'System infrastructure', ''),
('How many virtual servers do you have?', 'text', ';1', 0, '', 'System infrastructure', ''),
('What will be the evolution of your number of physical servers for 2019? (in% or quantity)', 'choice', 'I do not want to answer;0;I don''t know;0;In percentage;1;In quanity;1', 0, '', 'System infrastructure', ''),
('What will be the evolution of your number of virtual servers for 2019? (in% or quantity)', 'choice', 'I do not want to answer;0;I don''t know;0;In percentage;1;In quanity;1', 0, '', 'System infrastructure', ''),
('Has your company appointed a Green IT Manager / Digital Manager?', 'choice', 'Yes;0;No;0;I don''t know;0', 0, '', 'Management', ''),
('Do you have a responsible digital strategy broken down into an action plan?', 'choice', 'Yes;0;No;0;I don''t know;0', 0, '', 'Management', ''),
('Is Green IT a topic integrated into your CSR strategy?', 'choice', 'Yes;0;No;0;I don''t know;0', 0, '', 'Management', ''),
('Do you regularly evaluate the environmental impacts of your information system?', 'choice', 'Yes;0;No;0;I don''t know;0', 0, '', 'Management', ''),
('Do you have a team of competent referees on the topics of Green IT?', 'choice', 'Yes;0;No;0;I don''t know;0', 0, '', 'Management', ''),
('Have you integrated Green IT into your business strategy', 'choice', 'Yes;0;No;0;I don''t know;0', 0, '', 'Management', ''),
('Do you have those equipments in your compagny:', '', '', 0, 'Used: equipment used in the business activity<br>Not used functional: equipment in working order but no more used by the company (stored)<br>Neither used nor functional: out of service equipment (HS) waiting for end of life treatment', 'Workstation', '4'),
('Fixed stations, workstations', 'choice', 'Used;0;Not used functional;0;Neither used nor functional;0', 0, '', 'Workstation', '4'),
('Laptops, digital tablets', 'choice', 'Used;0;Not used functional;0;Neither used nor functional;0', 0, '', 'Workstation', '4'),
('Small printers (<15kg, potentially used by a household)', 'choice', 'Used;0;Not used functional;0;Neither used nor functional;0', 0, '', 'Workstation', '4'),
('Flat screen monitors', 'choice', 'Used;0;Not used functional;0;Neither used nor functional;0', 0, '', 'Workstation', '4'),
('Other flat screens (TV, projection screen, digital board ...)', 'choice', 'Used;0;Not used functional;0;Neither used nor functional;0', 0, '', 'Workstation', '4'),
('CRT monitors (monitors or other)', 'choice', 'Used;0;Not used functional;0;Neither used nor functional;0', 0, '', 'Workstation', '4'),
('Video projectors', 'choice', 'Used;0;Not used functional;0;Neither used nor functional;0', 0, '', 'Workstation', '4'),
('Mobile phones', 'choice', 'Used;0;Not used functional;0;Neither used nor functional;0', 0, '', 'Workstation', '4'),
('Fixed telephones (standalone not connected to such a standard)', 'choice', 'Used;0;Not used functional;0;Neither used nor functional;0', 0, '', 'Workstation', '4'),
('Digital cameras', 'choice', 'Used;0;Not used functional;0;Neither used nor functional;0', 0, '', 'Workstation', '4'),
('Hard Disk Devices, Storage, Backup', 'choice', 'Used;0;Not used functional;0;Neither used nor functional;0', 0, '', 'Workstation', '4'),
('Do you have other devices in your company?', 'choice', 'Yes;0;No;0', 0, 'Keyboards, mouse, graphic tablets, scanners, microphones, speakers, office equipment ...', 'Workstation', ''),
('Regarding other devices, do you have in your company:', 'choice', 'Used;0;Not used functional;0;Neither used nor functional;0', 0, 'Used: equipment used in the business activity<br>Not used functional: equipment in working order but no more used by the company (stored)<br>Neither used nor functional: out of service equipment (HS) waiting for end of life treatment', 'Workstation', '5'),
('Keyboards', 'choice', 'Used;0;Not used functional;0;Neither used nor functional;0', 0, '', 'Workstation', '5'),
('Mouse', 'choice', 'Used;0;Not used functional;0;Neither used nor functional;0', 0, '', 'Workstation', '5'),
('Graphic tablets', 'choice', 'Used;0;Not used functional;0;Neither used nor functional;0', 0, '', 'Workstation', '5'),
('Scanners', 'choice', 'Used;0;Not used functional;0;Neither used nor functional;0', 0, '', 'Workstation', '5'),
('Speakers', 'choice', 'Used;0;Not used functional;0;Neither used nor functional;0', 0, '', 'Workstation', '5'),
('Office automation', 'choice', 'Used;0;Not used functional;0;Neither used nor functional;0', 0, '', 'Workstation', '5'),
('Do you know the consumption of your workstation in kWh per year?', 'choice', 'Yes (in %);1;No;0', 0, '', 'Energy', ''),
('Do you track the energy consumption of your compagny activities?', 'choice', 'Yes;0;No;0;I don''t know;0', 0, '', 'Energy', ''),
('Do you know the share of IT and IT equipment in your company''s total energy consumption?', 'choice', 'Yes (in %);1;No;0', 0, '', 'Energy', ''),
('Have you set up a power management system? (automatic shutdown / shutdown of workstations)', 'choice', 'Yes;0;No;0;I don''t know;0', 0, '', 'Energy', ''),
('Do you use copiers from a repackaging industry (second-hand / second-hand)?', 'choice', 'Yes;0;No;0;I don''t know;0', 0, '', 'Printing', ''),
('Do you consolidate individual printers to shared printers?', 'choice', 'Yes;0;No;0;I don''t know;0', 0, '', 'Printing', ''),
('Have you set up an identification system on printers (to trigger printing)?', 'choice', 'Yes;0;No;0;I don''t know;0', 0, '', 'Printing', ''),
('What is the average life of your professional copier / MFP *?', 'choice', 'I do not know;0;Do not want to answer;0;Years;1', 0, '* MFP Multi Fonction Printer', 'Printing', ''),
('Are your printers set by default in eco mode? Especially :', '', '', 0, '', 'Printing', '6'),
('Energy saving (Automatic standby)', 'choice', 'Yes;0;No;0;I don''t know;0', 0, '', 'Printing', '6'),
('Black and white by default', 'choice', 'Yes;0;No;0;I don''t know;0', 0, '', 'Printing', '6'),
('Default duplex', 'choice', 'Yes;0;No;0;I don''t know;0', 0, '', 'Printing', '6'),
('Default draft mode', 'choice', 'Yes;0;No;0;I don''t know;0', 0, '', 'Printing', '6'),
('What is the number of pages printed / day / employee? (A4 equivalent)', 'choice', 'Less than 10;0;From 10 to 20;0;From 20 to 30;0;More than 30;0;I don''t know;0', 0, '', 'Printing', ''),
('Can you specify the number of cartridges / toners:', '', '', 0, '', 'Printing', ''),
('Cartbridges used a year', 'TextField', ';1', 0, 'Printing', '', '7'),
('Cartbridges stored in the average business', 'TextField', ';1', 0, 'Printing', '', '7'),
('Toners used in a year', 'TextField', ';1', 0, 'Printing', '', '7'),
('Toners stored in the average business', 'TextField', ';1', 0, 'Printing', '', '7'),
('Do you organize the separate collection of waste cartridges / toners?', 'choice', 'Yes, to a repackaging industry;0;Yes, towards a recycling channel (destruction);0;No no separate collection device is planned;0', 0, '', 'Printing', ''),
('Do you prefer the use of recycled paper?', 'choice', 'Yes, our paper is made from virgin paste;0;Yes, mixed paper;0;Yes, 100% recycled;0;I''m not paying attention;0', 1, '', 'Printing', ''),
('Do you choose certified paper?', 'choice', 'Yes, FSC;0;Yes, PEFC;0;Yes, Blue Angel;0;Yes, European Label;0;Yes, other;0;I''m not paying attention;0', 1, '', 'Printing', ''),
('Do you organize the separate collection of waste paper for recycling?', 'choice', 'Yes;0;No;0;I don''t know;0', 0, '', 'Printing', '');
