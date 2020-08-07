insert into coursecategories(category)

values('Natural and Physical Sciences'),
      ('Information Technology'),
      ('Engineering and Technology'),
      ('Agriculture and Environmental Studies'),
      ('Health'),
      ('Education'),
      ('Management and Commerce'),
      ('Society and Culture'),
      ('Creative Arts');


insert into coursesubcategories(subCategory, categoryId)

values('Atmospheric Science', 1),
      ('Geological Composition and Structures', 1),
      ('Mathematics and Statistical Techniques', 1),
      ('Sub-atomic Particles and Quantum ', 1),
      ('Physics and Astronomy', 1),
      ('Earth Science', 1),
      ('Soil Science', 1),
      ('Hydrology', 1),
      ('Oceanography', 1),
      ('Ecology and Evolution', 1),
      ('Forensic Science', 1),
      ('Pharmacology', 1),

      ('Computation Theory', 2),
      ('Computer Programming', 2),
      ('Robotics and Artificial Intelligence', 2),      ('System Analysis', 2),
      ('Database Management', 2),
      ('Security Science', 2),

      ('Manufacturing Engineering  & Technology', 3),
      ('Process & Resource Engineering', 3),
      ('Automotive Engineering & Technology', 3),
      ('Mechanical Engineering', 3),

      ('Crop Production', 4),
      ('Veterinary Science', 4),
      ('Forestry Resources Management', 4),
      ('Soil and Water Conservation', 4),

      ('Disease Processes and Mechanisms', 5),
      ('Restoration and Maintenance of Health', 5),
      ('Medical Studies', 5),
      ('Nutrition Science', 5),

      ('Teacher Education', 6),
      ('Curriculum & Education Studies', 6),

      ('Management and Administration', 7),
      ('Sales and Marketing', 7),
      ('Business and Management', 7),
      ('Banking & Finance', 7),

      ('Political Science and Policy Studies', 8),
      ('Justice and Law Enforcement', 8),
      ('Policy Studies', 8),
      ('Sociology', 8),

      ('Performing Arts', 9),
      ('Visual Arts and Crafts', 9),
      ('Graphic and Design Studies', 9);


insert into courses(courseName, about, categoryId, subCategoryId, universityId, instructorId, enrollmentCount, totalWeeks)

values('Quantum Mechanics for Everyone', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tristique aliquet risus, a ullamcorper erat rutrum quis. Suspendisse vitae massa quis lacus cursus ultricies sit amet a urna. Nam et leo sit amet nisi dignissim pellentesque. Suspendisse pretium porta vehicula. Maecenas tincidunt elementum arcu, ut varius velit facilisis sit amet. Etiam porta ornare neque, at fermentum lacus varius at. Fusce condimentum consequat turpis eget dapibus. Etiam vel efficitur lectus. Donec quis enim felis. Vivamus turpis lorem, consequat eget facilisis at, ultricies sagittis enim. Nulla est erat, molestie et arcu sit amet, condimentum vehicula justo. Vivamus sollicitudin euismod dui, ac feugiat massa tristique non.', 1, 4, 1, 1, 0, 2),

('Introduction to Machine Learning', 'Morbi sollicitudin ornare enim vitae ultrices. Maecenas lacinia et nulla vel accumsan. Nunc quis aliquam turpis. In auctor molestie est, nec volutpat dui feugiat gravida. Nunc sodales tempor odio sit amet tincidunt. Nulla vestibulum tristique gravida. Sed mollis elit risus, quis dignissim velit cursus vitae. Aenean cursus ligula vel tincidunt varius. Maecenas quis elit tortor. Cras non pulvinar odio, volutpat vehicula sapien. Sed vel nulla quam. Suspendisse id feugiat purus. Curabitur in tristique sem. Donec imperdiet purus non diam suscipit auctor. Nulla mauris nisl, pellentesque sit amet urna at, malesuada commodo nisl.', 2, 15, 2, 2, 0, 2),

('Digital Manufacturing', 'Etiam metus nibh, viverra in vestibulum vel, pellentesque non sem. Praesent a vehicula purus. Phasellus vehicula est enim, sed fringilla risus posuere et. Fusce consequat ultrices lectus ut convallis. Cras volutpat vel elit quis porttitor. Nam est nibh, egestas non diam sed, sagittis tincidunt elit. Aenean sagittis metus interdum enim commodo, a ultricies nisl accumsan. Cras congue elementum tellus volutpat finibus. Sed dapibus libero vitae ipsum suscipit feugiat. Nunc egestas odio pellentesque, hendrerit magna in, congue neque. Integer a vestibulum odio. Integer id diam tempus, egestas nulla sed, vehicula massa. Aliquam erat volutpat. Vestibulum sed posuere ipsum, pulvinar facilisis libero.', 3, 19, 1, 1, 0, 2),

('Animal Behavior and Welfare', 'Ut id accumsan mi. In aliquet, lacus eget blandit blandit, risus sem semper risus, quis pharetra nunc turpis non turpis. Suspendisse libero neque, convallis scelerisque odio sit amet, ultricies sagittis lectus. Nam finibus suscipit volutpat. Morbi eget luctus velit. Vestibulum a nunc eu orci euismod blandit. Maecenas erat metus, mattis eget dolor suscipit, mattis suscipit risus. Aenean fringilla porttitor leo id blandit. Suspendisse porta erat rutrum eros consequat feugiat lacinia vel nisi. Sed congue purus sed nisi posuere congue. Etiam lacinia est et nulla varius, ac fringilla sem malesuada. Cras et neque laoreet, convallis nunc vel, rutrum magna. Donec finibus ullamcorper sem, ut semper enim laoreet vel. Aliquam arcu risus, consectetur vitae ultricies non, semper eu neque. Ut faucibus, tortor vitae finibus dignissim, tortor velit efficitur libero, eget tempus mauris dui hendrerit eros.', 4, 24, 1, 1, 0, 2),


('Economics of Money and Bangking', 'Aliquam accumsan justo tellus, non sodales metus viverra ut. Curabitur aliquam at mauris quis vulputate. Nam finibus quam sed risus tempus, sed laoreet enim dictum. Etiam a euismod lorem, vel rutrum urna. Phasellus elementum mi vel orci accumsan eleifend. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris nisl lectus, ultricies a est et, elementum vehicula enim. Pellentesque eu justo porta, scelerisque lectus ut, elementum urna. Vestibulum tristique non nibh sed dictum. Curabitur ornare felis ac nibh pulvinar, sagittis viverra eros tempor. Vivamus faucibus pulvinar nisi ut interdum. Sed posuere nibh non sem imperdiet, non porta elit sollicitudin. Donec et est in neque dictum aliquam. Pellentesque accumsan auctor malesuada. Maecenas a arcu fringilla, vehicula lorem eu, tempor massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 7, 36, 2, 2, 0, 2),

('Introduction to Interior Design', 'Duis at lacinia erat. Cras sed lectus non neque pulvinar vulputate in sit amet lectus. Nam quis libero egestas, laoreet dui at, elementum arcu. Praesent ut molestie odio. Donec ut tellus ut augue iaculis pellentesque eu bibendum velit. Nulla blandit, tortor vel ornare vulputate, nisl massa mattis dolor, vel fringilla diam diam vel lorem. Phasellus imperdiet enim non nibh fringilla elementum. Fusce sodales vestibulum scelerisque. Aenean rutrum quam ut ullamcorper lobortis. Donec fermentum gravida turpis, eget accumsan quam imperdiet non. Vivamus varius, nulla aliquet gravida egestas, felis odio varius sapien, varius finibus sapien turpis et tortor. Mauris facilisis orci sed enim ultrices porta. Ut velit quam, vulputate et mauris facilisis, sollicitudin ullamcorper enim. Mauris varius, leo vitae pharetra placerat, leo quam sodales odio, vulputate luctus augue dolor quis neque. Donec nec quam volutpat, ultrices massa in, pellentesque sapien. Phasellus suscipit venenatis dui, a vestibulum massa sagittis a.', 9, 42, 2, 2, 0, 2);


insert into coursesyllabus(courseId, weekNumber, moduleNumber, moduleHeader, topics, assessments)

values(1, 1, 1, 'Introduction to Quantum Mechanics', 'Introduction, Classical Mechanics of Moving Magnets in a Magnetic Field, Probability, Quantum Probability', 'Assessment 1'),

(1, 2, 1, 'Quantum Mechanics of Light', 'Wave or Particle?, Exploring the Quantum Model for Light, Developing the Quantum Model for Light, Application of the Quantum Theory of Light', 'Assessment 2'),

(2, 1, 1, 'Introduction to Machine Learning', 'What is Machine Learning?, Application of Machine Learning', 'Assessment 1'),

(2, 2, 1, 'Introduction to Some Machine Learning Algorithms', 'Linear Regression, Logistic Regression', 'Assessment 2');
