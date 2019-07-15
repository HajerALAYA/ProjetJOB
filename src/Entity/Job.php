<?php

namespace App\Entity;

use DateTime;

class Job {

    private $id;
    private $category; // instance de Category
    private $type;
    private $company;
    private $logo;
    private $url;
    private $position;
    private $location;
    private $description;
    private $howToApply;
    private $token;
    private $isPublic;
    private $isActivated;
    private $email;
    private $expiresAt;
    private $createdAt;
    private $updatedAt;
    public function getId() {
        return $this->id;
    }

    public function getCategory() {
        return $this->category;
    }

    public function getType() {
        return $this->type;
    }

    public function getCompany() {
        return $this->company;
    }

    public function getLogo() {
        return $this->logo;
    }

    public function getUrl() {
        return $this->url;
    }

    public function getPosition() {
        return $this->position;
    }

    public function getLocation() {
        return $this->location;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getHowToApply() {
        return $this->howToApply;
    }

    public function getToken() {
        return $this->token;
    }

    public function getIsPublic() {
        return $this->isPublic;
    }

    public function getIsActivated() {
        return $this->isActivated;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getExpiresAt() {
        return $this->expiresAt;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function getUpdatedAt() {
        return $this->updatedAt;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setCategory($category) {
        $this->category = $category;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function setCompany($company) {
        $this->company = $company;
    }

    public function setLogo($logo) {
        $this->logo = $logo;
    }

    public function setUrl($url) {
        $this->url = $url;
    }

    public function setPosition($position) {
        $this->position = $position;
    }

    public function setLocation($location) {
        $this->location = $location;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setHowToApply($howToApply) {
        $this->howToApply = $howToApply;
    }

    public function setToken($token) {
        $this->token = $token;
    }

    public function setIsPublic($isPublic) {
        $this->isPublic = $isPublic;
    }

    public function setIsActivated($isActivated) {
        $this->isActivated = $isActivated;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setExpiresAt($expiresAt) {
        $this->expiresAt = $expiresAt;
    }

    public function setCreatedAt($createdAt) {
        $this->createdAt = $createdAt;
    }

    public function setUpdatedAt($updatedAt) {
        $this->updatedAt = $updatedAt;
    }


}
