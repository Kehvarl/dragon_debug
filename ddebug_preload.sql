INSERT INTO dragons (id, name, created_at, updated_at) VALUES (0, 'Dragon 1', NOW(), NOW());
INSERT INTO dragons (id, name, created_at, updated_at) VALUES (0, 'Dragon 2', NOW(), NOW());
INSERT INTO sessions (id, problem, created_at, updated_at) VALUES (0, 'Dragon debugging', NOW(), NOW());
INSERT INTO session_dragon (id, debug_session_id, dragon_id, created_at, updated_at) VALUES (0, 1, 1, NOW(), NOW());
INSERT INTO session_dragon (id, debug_session_id, dragon_id, created_at, updated_at) VALUES (0, 1, 2, NOW(), NOW());
INSERT INTO messages (id, debug_session_id, text, created_at, updated_at) VALUES (0, 1, 'Like Duck debugging', NOW(), NOW());
INSERT INTO messages (id, debug_session_id, text, created_at, updated_at) VALUES (0, 1, 'but better', NOW(), NOW());
INSERT INTO messages (id, debug_session_id, text, created_at, updated_at) VALUES (0, 1, 'because DRAGONS!', NOW(), NOW());
