#!/bin/bash

if [ -d ~/aisite-rebuild ]; then
  echo "[RESTORE] Przywracanie struktury..."
  mkdir -p frontend backend ai/kamerdyner ai/admin god_panel remotp deploy docs
  touch ai/kamerdyner/{prompt.md,task_queue.json,ai_state.json}
  touch ai/admin/{prompt.md,task_queue.json,ai_state.json}
  echo "[RESTORE] Struktura przywrócona."
else
  echo "[RESTORE] Folder ~/aisite-rebuild nie istnieje."
fi
