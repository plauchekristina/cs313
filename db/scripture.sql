CREATE TABLE scriptures
(
    scripture_id serial PRIMARY KEY,
    scripture_book VARCHAR (20) NOT NULL,
    scripture_chapter INTEGER,
    scripture_verse INTEGER,
    scripture_content TEXT NOT NULL
);
INSERT INTO scriptures
    (scripture_book, scripture_chapter, scripture_verse, scripture_content )
VALUES
    ('John', 1, 5, 'And the light shineth in darkness; and the darkness comprehended it not.'),
    ('D&C', 88, 49, 'The light shineth in darkness, and the darkness comprehendeth it not; nevertheless, the day shall come when you shall comprehend even God, being quickened in him and by him.'),
    ('D&C', 93, 28 , 'He that keepeth his commandments receiveth truth and light, until he is glorified in truth and knoweth all things.'),
    ('Mosiah', 16, 9, 'He is the light and the life of the world; yea, a light that is endless, that can never be darkened; yea, and also a life which is endless, that there can be no more death.');
CREATE TABLE topic
(
    topic_id serial PRIMARY KEY NOT NULL,
    topic_name varchar(30) NOT NULL
);
INSERT INTO topic
    (topic_name)
VALUES
    ('Faith'),
    ('Sacrifice'),
    ('Charity');
CREATE TABLE scripture_topic
(
    scripture_topic_id serial PRIMARY KEY NOT NULL,
    scripture_id integer NOT NULL REFERENCES scriptures(scripture_id),
    topic_id integer NOT NULL REFERENCES topic(topic_id)
);
INSERT INTO scripture_topic
    ( scripture_id, topic_id )
VALUES
    (1, 1),
    (2, 2),
    (3, 3);
