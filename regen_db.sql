DROP TABLE IF EXISTS messages;

CREATE TABLE messages (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(1234) NOT NULL,
  message VARCHAR(1234) NOT NULL,
  image VARCHAR(1234),
  thumbnail VARCHAR(1234),
  upload_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO messages(name, message, image, thumbnail) VALUES
  ('Michel Corona Crépin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tincidunt gravida diam eu vestibulum. Suspendisse sagittis scelerisque auctor. Nunc ullamcorper, dui at sollicitudin dictum, ligula sem lobortis felis, vel eleifend risus ante id ante. In hac habitasse platea dictumst. Donec id leo nec velit efficitur sollicitudin eu quis velit. Maecenas eu molestie nisl, eget eleifend nulla. Donec varius massa non ipsum mollis, nec euismod sem feugiat. Sed ultrices nisi in nulla feugiat, vitae varius mi malesuada. Fusce eu pellentesque nisl, vitae viverra elit. Nunc sodales nisi at nulla eleifend dictum. Morbi tristique ligula ut tellus gravida tempor. Phasellus neque enim, vulputate ut vulputate vitae, dapibus sit amet elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae', 'img/1.jpg', 'img/t_1.jpg'),
  ('Jarvis Jacquet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tincidunt gravida diam eu vestibulum. Suspendisse sagittis scelerisque auctor. Nunc ullamcorper, dui at sollicitudin dictum, ligula sem lobortis felis, vel eleifend risus ante id ante. In hac habitasse platea dictumst. Donec id leo nec velit efficitur sollicitudin eu quis velit. Maecenas eu molestie nisl, eget eleifend nulla. Donec varius massa non ipsum mollis, nec euismod sem feugiat. Sed ultrices nisi in nulla feugiat, vitae varius mi malesuada. Fusce eu pellentesque nisl, vitae viverra elit. Nunc sodales nisi at nulla eleifend dictum. Morbi tristique ligula ut tellus gravida tempor. Phasellus neque enim, vulputate ut vulputate vitae, dapibus sit amet elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae', 'img/2.jpg', 'img/t_2.jpg'),
  ('Emmanuel Macron', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tincidunt gravida diam eu vestibulum. Suspendisse sagittis scelerisque auctor. Nunc ullamcorper, dui at sollicitudin dictum, ligula sem lobortis felis, vel eleifend risus ante id ante. In hac habitasse platea dictumst. Donec id leo nec velit efficitur sollicitudin eu quis velit. Maecenas eu molestie nisl, eget eleifend nulla. Donec varius massa non ipsum mollis, nec euismod sem feugiat. Sed ultrices nisi in nulla feugiat, vitae varius mi malesuada. Fusce eu pellentesque nisl, vitae viverra elit. Nunc sodales nisi at nulla eleifend dictum. Morbi tristique ligula ut tellus gravida tempor. Phasellus neque enim, vulputate ut vulputate vitae, dapibus sit amet elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae', 'img/3.jpg', 'img/t_3.jpg'),
  ('Jean-Claude Van Damme', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tincidunt gravida diam eu vestibulum. Suspendisse sagittis scelerisque auctor. Nunc ullamcorper, dui at sollicitudin dictum, ligula sem lobortis felis, vel eleifend risus ante id ante. In hac habitasse platea dictumst. Donec id leo nec velit efficitur sollicitudin eu quis velit. Maecenas eu molestie nisl, eget eleifend nulla. Donec varius massa non ipsum mollis, nec euismod sem feugiat. Sed ultrices nisi in nulla feugiat, vitae varius mi malesuada. Fusce eu pellentesque nisl, vitae viverra elit. Nunc sodales nisi at nulla eleifend dictum. Morbi tristique ligula ut tellus gravida tempor. Phasellus neque enim, vulputate ut vulputate vitae, dapibus sit amet elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae', null, null);
