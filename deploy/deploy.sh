#!/bin/bash

cd ~/aisite-rebuild

if [ ! -d "~/aisite_backups" ]; then
  mkdir -p ~/aisite_backups
fi

echo "[DEPLOY] Tworzenie snapshotu ZIP..."
date=20250731-1137
zip -r ~/aisite_backups/aisite-.zip .
echo "[DEPLOY] Snapshot zapisany. Gotowe do push lub publikacji."
