<?php

class HenworxProject extends \Project {

	public function getName(): string {
		return 'henworx GmbH & Co. KG';
	}

	public function getPosition(): string {
		return 'Senior Developer';
	}

	public function getSlug(): string {
		return '/henworx';
	}

	public function getThumbnailHandle(): string {
		return 'henworx';
	}

	public function getBegin(): DateTime {
		return new DateTime('2021-01-01');
	}

	public function getEnd(): ?DateTime {
		return null;
	}

}